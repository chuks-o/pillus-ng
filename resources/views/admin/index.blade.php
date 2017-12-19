@extends('layouts.admindashboard.app')
@section('subtitle', 'All Published Insights')

@section('content')
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		@if(Session::has('success'))
		<div class="alert alert-success text-center">
			<h5 class="text-center"><strong>{{ Session::get('success') }}</strong></h5>
		</div>
		@endif
		<table class="table table-hover table-responsive">
			<thead>
				<tr>
					<th>Title of Post</th>
					<th>Date created</th>
					<th>Time created</th>
					<th>Preview</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
				@foreach($insights as $insight)
				<tr>
					<td>{!! $insight->title !!}</td>
					<td>{!! $insight->created_at->toFormattedDateString() !!}</td>
					<td>{!! $insight->created_at->diffForHumans() !!}</td>
					<td>
						<a href="/admin001/{{ $insight->id}}" type="button" class="btn btn-default sub-btn " name="button"><span class="fa fa-folder-open-o fa-lg"></span></a>
					</td>
					<td>
						<a href="/admin001/{{ $insight->id}}/edit" type="button" class="btn btn-default sub-btn " name="button"><span class="fa fa-pencil-square-o fa-lg"></span></a>
					</td>
					<td>
						{!! Form::open(['method' => 'DELETE', 'route' => ['admin001.destroy', $insight->id]]) !!}
						<button type="submit" class="btn btn-default sub-btn"><span class="fa fa-trash-o fa-lg"></span></button>
						{!! Form::close() !!}
					</td>
				</tr>
				@endforeach

			</tbody>
		</table>
		<div class="text-center">
			{{ $insights->links() }}
		</div>
	</div>
</div>

@endsection
