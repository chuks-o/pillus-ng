@extends('layouts.admindashboard.app')
@section('subtitle', 'Insight Preview')

@section('content')
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<h1><strong>{!! $insights->title !!}</strong></h1>
		{!! $insights->content !!}
		<div class="text-center">
			<a href="{{ action('InsightController@htmltopdf', $insights->id) }}" class="btn btn-default"> <span class="fa fa-file-pdf-o"></span> Download PDF</a>
		</div>
	</div>
</div>
@endsection
