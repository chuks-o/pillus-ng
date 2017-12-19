@extends('layouts.admindashboard.app')
@section('subtitle', 'Publish an Insight')

@section('content')
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<div class="text-center">
			<h3>Tags</h3>
			<table class="table table-hover table-responsive">
				<thead>

					<tr>
						<th>Tags</th>
						<th>Update</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>
					@foreach($tags as $tag)
					<tr>
						<td>{{$tag}}</td>
						<td>
							<a href="/admin001/{{ $tag }}" type="button" class="btn btn-default sub-btn " name="button"><span class="fa fa-folder-open-o fa-lg"></span></a>
						</td>
						<td>
							<a href="/admin01/{{ $tag }}" type="button" class="btn btn-default sub-btn " name="button"><span class="fa fa-trash-o fa-lg"></span></a>
						</td>
					</tr>
					@endforeach

				</tbody>
			<table>
		</div>
	</div>
</div>
@endsection
