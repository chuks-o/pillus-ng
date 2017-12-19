@extends('layouts.admindashboard.app')
@section('subtitle', 'Publish an Insight')

@section('content')
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		@if(Session::has('success'))
		<div class="alert alert-success text-center">
			<h5><strong>{{ Session::get('success') }}</strong></h5>
		</div>
		@endif

		<form role="form" action="{{ route('admin001.store') }}" method="post">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="">Title</label>
				<input type="text" class="form-control input-lg" name="insight_title" value="{{ old('insight_title') }}" required>
			</div>
			<div class="form-group">
				<label for="">Content</label>
				<textarea class="form-control" name="insight_content"  id="article-ckeditor">
				</textarea>
			</div>
			<br>

			<div class="form-group">
				<label>Tags:</label>
				<input type="text" name="tags" id="tags">
				<script>
					var tags = [
					    @foreach ($tags as $tag)
					    {tag: "{{$tag}}" },
					    @endforeach
					];
				</script>
			</div>
			<br>
			<div class="form-group text-center">
				<button type="submit" class="btn btn-primary btn-lg">Publish Post</button>
			</div>
		</form>
	</div>
</div>

@endsection
