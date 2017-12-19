<!-- layout app -->
@extends('layouts.app')
@section('title', 'About')
@section('content')
	@include('layouts.nav')
	<div class="container about-container">
		<div class="col-md-10 col-md-offset-1">
			<ol class="breadcrumb">
				<li><a href="/">Home</a></li>
				<li class="active">About</li>
			</ol>

			<h3 class="">
				<strong>	About PEN</strong>
			</h3>
			<hr class="horz-line">
			<p>
				At its core, Pillus Engineeing limited (PEN) is committed to consistently delivering integrated and resilient engineering and construction solutions to meet complex and evolving client needs. The foundation of our success lies in our commitment to the three tenets; “Safety, Quality, Integrity”.  When you discover PEN, you’ll find a company ready and capable to deliver a variety of design, engineering and construction services, with a process focused on efficiency, communication, and quality control.
			</p>
			<p>
				We exist to identify opportunities, overcome challenges, maximize potential, and achieve fulfillment. We identify root-cause problems, engineer cost-effective solutions, and start-up your projects to optimize profitability and safety. Our detailed models identify the most cost effective solution that is carried through the FEED, detailed design, procurement and construction management phases. PEN has the expertise to take your project from concept to start-up and achieve all of your project goals.
			</p>
			<hr style="color:red !important;">

		</div>
	</div>
@include('layouts.footer')

@endsection
<!-- end of layout app -->
