<?php
namespace App\Http\Controllers;

use DB;
use PDF;
use App\Insight;
use Illuminate\Http\Request;

class InsightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $insights = Insight::with('tagged')->first()->latest()->paginate(15);
		  $tags = Insight::existingTags();
 		  $ins = Insight::latest()->take(10)->get();
		  return view('insights.insight', compact('insights','tags','ins'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

	/* Generating a pdf for download using DomPDF */
	 public function htmltopdf(Request $request, $id)
	 {
		 	$insight = Insight::find($id);
		 	$pdf = PDF::loadView('pdf.pdfview', compact('insight'));
			return $pdf->download('Pillus | '. $insight->title.'.pdf');
	 }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		 	$insights = Insight::with('tagged')->first()->find($id);
			return view('insights.show', compact('insights'));
    }

	 public function showTags($tag) {
		 $insights = Insight::withAnyTag([$tag])->paginate(10);
		 $tags = Insight::existingTags();
  	  $ins = Insight::latest()->take(10)->get();
  	  return view('insights.insight', compact('insights','tags','ins'));
	 }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
