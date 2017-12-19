<!-- layout app -->
@extends('layouts.app')
@section('title', 'Careers in Pillus Engineering')
@section('content')
	@include('layouts.nav')
	<div class="container about-container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<ol class="breadcrumb">
					<li><a href="/">Home</a></li>
					<li class="active">Careers</li>
				</ol>
				<div class="col-md-6 ">
					<h3 class="">
						<strong>	Careers in PEN
							<hr>
						</strong>
					</h3>
					<img src="pillus/images/black-people-office.jpg" alt="">
				</div><br>
				<div class="col-md-6 ">
					<p>
						<strong>Pillus Engineering Nigeria Limited (PEN)</strong> strives to hire the most talented engineers, architects, CAD technicians, marketing, and administrative people in the industry.
						We offer a progressive place to work with great people and opportunities to learn and advance your career, along with competitive benefits and salaries.
					</p>
					<!-- <hr> -->
				</div>
			</div>
		</div>
	</div>
	<br><br><br><br>
@include('layouts.footer')

@endsection
<!-- end of layout app -->
