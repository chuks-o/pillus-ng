<?php
namespace App\Http\Controllers;

use App\User;
use App\Tag;
use App\Insight;
use Illuminate\Http\Request;

class AdminController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		 $insights = Insight::latest()->paginate(10);
		 return view('admin.index', compact('insights'));
    }

	 public function insightTags()
	 {
		  $tags = Insight::existingTags()->pluck('name');
		 return view('admin.insight-tags', compact('tags'));
	 }

	 public function deleteTag($name)
	 {
		 Conner\Tagging\Model\Tag::where('name', $name)->delete();
		 return back()->with('success', 'Tag was deleted successfully');

	 }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		 $tags = Insight::existingTags()->pluck('name');
		 return view('admin.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		 $this->validate($request, [
	   	 'insight_title' => 'required|min:5',
	   	 'insight_content' => 'required|min:10',
			 'tags' => 'required'
	    ]);

		 $tags = explode(',', $request->tags);
	    $insight = new Insight();
	    $insight->title = $request->insight_title;
	    $insight->content = $request->insight_content;
		 $insight->user_id = auth()->id();
	    $insight->save();
		 $insight->tag($tags);

	    return redirect()->route('admin001.index')->with('success', 'Post was created successfully');
	 }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		 $insights = Insight::findOrFail($id);
  	    return view('admin.show', compact('insights'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		 $insights = Insight::findOrFail($id);
		return view('admin.edit', compact('insights'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
		 $this->validate($request, [
			 'insight_title' => 'required',
			 'insight_content' => 'required'
		 ]);

		 $tags = explode(',', $request->tags);
		 $insight = Insight::find($id);
		 $insight->title = $request->insight_title;
		 $insight->content = $request->insight_content;

		 $insight->save();
		 $insight->tag($tags);

		 return redirect('/admin001')->with('success', 'Post was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		  Insight::find($id);
        Insight::where('id', $id)->delete();
		  return back()->with('success', 'Post was deleted successfully');
    }
}
