@extends('layouts.admindashboard.app')
@section('subtitle', 'Edit/Update Insight')

@section('content')

<div class="row">
	<div class="col-md-10 col-md-offset-1">
		@if(Session::has('success'))
		<div class="alert alert-success text-center">
			<p class="text-center"><strong>{{ Session::get('success') }}</strong></p>
		</div>
		@endif

		{!! Form::open(['action' => ['AdminController@update', $insights->id], 'method' => 'PUT']) !!}
		<div class="form-group">
			<label for="">Title</label>
			<input type="text" class="form-control " name="insight_title" value="{{ $insights->title }}" >
		</div>
		<div class="form-group">
			<label for="">Content</label>
			<textarea class="form-control" name="insight_content" id="article-ckeditor">
				{{ $insights->content }}
			</textarea>
		</div>
		<br>
		<div class="form-group">
			<label>Tags:</label>
			<input type="text" name="tags" id="tags">
			<script>
				var tags = [
					 @foreach ($insights->tags as $tag)
					 {tag: "{{ $tag->name }}" },
					 @endforeach
				];
			</script>
		</div>
		<div class="form-group text-center">
			<button type="submit" class="btn btn-success btn-lg admin-btn" name="button">Update Post</button>
		</div>
		{!! Form::close() !!}
	</div>

</div>
@endsection
