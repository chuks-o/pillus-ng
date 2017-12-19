<!-- layout app -->
@extends('layouts.app')
@section('title', 'About')
@section('content')
	@include('layouts.nav')
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<ol class="breadcrumb">
					<li><a href="/">Home</a></li>
					<li class="active">Insight</li>
				</ol>
				@foreach( $insights as $insight)
					<div class="panel panel-success panel-no-border">
						<div class="panel-body">
							<a href="{{ route('insight.show', [$insight->id, str_slug($insight->title)]) }}">
								<h2 class="hidden-xs hidden-md"><strong>{!! $insight->title !!}</strong></h2>
								<h3 class="visible-xs"><strong>{!! $insight->title !!}</strong></h3>
							</a>
							<div class="content-span hidden-xs">
								{!! str_limit( $insight->content, $limit = 250, $end='...') !!}
								<a href="{{ action('InsightController@show', [$insight->id, $insight->title]) }}"  class="btn btn" name="button">
									Read more
									<span class="fa fa-arrow-circle-right"></span>
								</a>
							</div>
							<div class="content-mobile visible-xs">
								{!! str_limit( $insight->content, $limit = 250, $end='...') !!}
								<a href="{{ action('InsightController@show', [$insight->id, $insight->title]) }}"  class="btn btn" name="button">
									Read more
									<span class="fa fa-arrow-circle-right"></span>
								</a>
							</div>
							<!-- <span class="content-span">
							</span> -->
						</div>
						<div class="panel-footer">
							<h5 style="font-size:12px !important;" class="insight-date-time"><span class="fa fa-calendar"></span> Posted on {!! $insight->created_at->toFormattedDateString() !!}</h5>
							<h5 style="font-size:12px !important;" class="insight-date-time"><span class="fa fa-clock-o"></span> {!! $insight->created_at->toTimeString() !!}</h5>
						</div>
					</div>
				@endforeach

				<div class="text-center">
					<p>
						{{ $insights->links() }}
					</p>
				</div>
			</div>
			<br>
			<div class="col-md-4">
				<div class="panel panel-success panel-no-border">
					<div class="panel-heading" style="background-color:white;">
						<h4><strong>Categories</strong></h4>
					</div>
					<div class="panel-body tag-panel">
						@foreach($tags as $tag)
							<a href="/insight/tag/{{$tag->name}}">
								<p><strong>{{ $tag->name }}</strong></p>

							</a>
						@endforeach
					</div>
				</div><br>

				<div class="panel panel-success panel-no-border">
					<div class="panel-heading" style="background-color:white;">
						<h4><strong>Latest Insights</strong></h4>
					</div>
					<div class="panel-body">
							@foreach($ins as $in)
								<h4>
									<a href="{{ route('insight.show', [$in->id, str_slug($in->title)]) }}">{{$in->title}}</a>
								</h4>
								<h5 style="font-size:12px !important;"><span class="fa fa-calendar"></span> {{ $in->created_at->toFormattedDateString()  }}</h5>
								<br>
							@endforeach
					</div>
				</div>
			</div>


		</div>
	</div>
	<br>
@include('layouts.footer')

@endsection
<!-- end of layout app -->
