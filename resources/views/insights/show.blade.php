<!-- layout app -->
@extends('layouts.insight_app')
@section('title', $insights->title . ' - Pillus')
@section('content')
	@include('layouts.nav')

	<!-- facebook comment -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=158727374734240';
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<!-- End of facebook comment -->

	<!-- facebook like and share -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=158727374734240';
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<!-- End facebook like and share -->

	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<ol class="breadcrumb">
					<li><a href="/">Home</a></li>
					<li><a href="/insight">Insight</a></li>
					<li class="active">{!! $insights->title !!}</li>
				</ol>
				<div class="panel panel-insight ">
					<div class="panel-body">
						<h1 style="font-weight:100 !important;" class="hidden-xs"><strong>{!! $insights->title !!}</strong></h1>
						<h2 class="visible-xs">{!! $insights->title !!}</h2>
						<h5 class="insight-date-time" style="">
								<span class="fa fa-clock-o ">
								</span>
							Posted {{ $insights->created_at->diffForHumans() }}&nbsp; |
						   By {{ $insights->user->name }}
							<br><br>
							@foreach($insights->tags as $tag)
							<span class="label label-success">
								<a class="" href="/insight/tag/{{$tag->name}}">
									{{ $tag->name }}
								</a>
							</span>
							&nbsp;
							@endforeach
							<hr>
					  </h5>
						{!! $insights->content !!}
						<br>
						<!-- Tag section -->
						<span>
							@if($insights->tags)
								<strong><span class="fa fa-tags"></span> Tags: </strong>
								@foreach($insights->tags as $tag)
									<span class="label label-success">
										<a href="/insight/tag/{{$tag->name}}">
											{{ $tag->name }}
										</a>
									</span> &nbsp;
								@endforeach
							@endif
						</span>
						<!-- End of Tag section -->
						<br><br><br>

						<!-- PDF Download button -->
						<div class="text-center">
							<a href="{{ action('InsightController@htmltopdf', $insights->id) }}"
								class="btn btn-primary admin-btn">
								<span class="fa fa-file-pdf-o"></span>
								Download this insight
							</a>
							<br><br><br>
						</div>
						<!-- End of PDF Download button -->

						<!-- Facebook comment, like and share button -->
						<div class="col-xs-12 col-md-12">
							<h5>Like us on facebook</h5>
							<div class="fb-like"
								data-href="https://web.facebook.com/PillusLTD/?ref=br_rs&_rdc=1&_rdr"
								data-layout="button_count" data-action="like" data-size="small"
								data-show-faces="true" data-share="true">
							</div>

							<br><br><hr>
							<div class="fb-comments"
								data-href="{{ Request::url() }}"
								data-order-by="social" data-numposts="5">
							</div>
						</div>
						<!-- End of Facebook comment, like and share button -->

					</div>
				</div>
			</div>
		</div>
	</div>
	<br><br>

@include('layouts.footer')

@endsection
<!-- end of layout app -->
