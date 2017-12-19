@extends('layouts.app')
@section('title', 'Pillus Engineering Nigeria Limited | Home')
@section('content')
	@include('layouts.nav')
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
	</ol>

	<!-- Wrapper for slides -->

	<div class="carousel-inner" role="listbox" >
		<div class="item active">
			<img src="pillus/images/machine03.jpg" alt="machine-image-slider" >
			<!-- <img src="http://res.cloudinary.com/davecode01/image/upload/c_fit,h_500/v1509532600/machine_y.jpg" alt=""> -->
			<div class="carousel-caption">
				<h4 class="text-center">Pillus Enginerring Ltd
				</h4>
				<p>
					The bedrock of Machine Practices
				</p>
			</div>
		</div>
		<div class="item">
			<img src="pillus/images/engineer01.jpg" alt="...">
			<div class="carousel-caption">
				<h4 class="text-center">Pillus Enginerring Ltd
				</h4>
				<em>
					The bedrock of Machine Practices
				</em>
			</div>
		</div>
		<div class="item">
			<img src="pillus/images/gears.jpg" alt="...">
			<div class="carousel-caption">
				<h4 class=" text-center">Pillus Enginerring Ltd
				</h4>
				<p>
					The bedrock of Machine Practices
				</p>
			</div>
		</div>

	</div>

	<!-- Controls -->
	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>


<section id="section1">
	<div class="container">
		<h4 class="text-center">
			<a href="">
				<span class="fa-stack fa-lg">
					<i class="fa fa-circle fa-stack-2x"></i>
					<i class="fa fa-home fa-stack-1x fa-inverse"></i>
				</span>
			</a>
		</h4>
		<h3 class="text-center our-services"><strong>Who we are...</strong></h3>

		<h3 class="text-center pillus-core-h3 hidden-xs">
			<em><span class="fa fa-quote-left"></span>
				At its core, Pillus Engineering limited (PEN) is committed to consistently delivering integrated and resilient engineering and construction solutions to meet complex and evolving client needs.
				<span class="fa fa-quote-right"></span>
			</em><br>
		</h3>
		<h3 class="text-center pillus-mobile-h3 hidden-lg visible-xs visible-md">
			<em><span class="fa fa-quote-left"></span>
				At its core, Pillus Engineering limited (PEN) is committed to consistently delivering integrated and resilient engineering and construction solutions to meet complex and evolving client needs.
				<span class="fa fa-quote-right"></span>
			</em><br><br>
		</h3>

		<div class="text-center">
			<a href="/about" class="btn btn-default sub-btn">
				Learn more
			</a>
		</div> <br>
	</div>
</section>

<section class="lit-note">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<h4 class="text-center contact-header">
					Contact us today
				</h4>
				<p class="text-center">
					<span class="fa fa-envelope"></span> Email: pillusengineering@gmail.com  |
					<span class="fa fa-phone"></span> Mobile: +234-7039424167 || +234-8103469534
				</p>
			</div>

		</div>
	</div>
</section>

<section id="section2">
	<div class="container">
		<div class="row">
			<h4 class="text-center">
				<a href="">
					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-truck fa-stack-1x fa-inverse"></i>
					</span>
				</a>
			</h4>

			<h3 class="text-center our-services"><strong> Our Services </strong></h3>
			<br><br>
			<div class="boxs">
				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">
						<div class="align-center">
							<div class="panel panel-default">
								<div class="panel-body text-center">
									<img src="pillus/images/autocad-2.jpg" alt="" class="img-responsive">

									<h4 class="text-center">2D Drafting and Designs</h4>
									<p>
										Our team of engineers meet to clients needs by providing AutoCAD Designs adn Autodesk Inventor designs
									</p>
									<div class="ficon">
										<a href="" class="btn btn-default sub-btn" alt="">Learn more</a>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">
						<div class="align-center">
							<div class="panel panel-default">
								<div class="panel-body text-center">
									<img src="pillus/images/pdms-01.jpg" alt="" class="img-responsive">

									<h4 class="text-center">3D Design and Modeling</h4>
									<p>
										Our team of engineers are skilled in delivering the best of Plant Design Management System (PDMS) designs, AutoCAD 3D, Solidworks and Autodesk Inventor to our esteemed clients
									</p>
									<div class="ficon">
										<a href="" class="btn btn-default sub-btn" alt="">Learn more</a>
									</div>

								</div>

							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">
						<div class="align-center">
							<div class="panel panel-default">
								<div class="panel-body text-center">
									<img src="pillus/images/piping-eng.jpg" alt="" class="img-responsive">

									<h4 class="text-center">Piping Engineering and Design</h4>
									<p>
										We undertake the following - All Configurations, Materials, and ASME Codes,
										Stress and Flexibility Analysis Including Vessel / Tank Nozzle Analysis
									</p>
									<div class="ficon">
										<a href="" class="btn btn-default sub-btn" alt="">Learn more</a>
									</div>

								</div>

							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

<section id="section3">
	<div class="container">
		<div class="row">
			<div class="boxs">
				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">
						<div class="align-center">
							<div class="panel panel-default">
								<div class="panel-body text-center">
									<img src="pillus/images/autodesk-2.jpg" alt="" class="img-responsive">

									<h4 class="text-center">Plant Equipment Selection and Engineering</h4>
									<p>
										With the expertise of our skilled engineers, we are your best pick when it comes to plant equipment selection and engineering.

									</p>
									<div class="ficon">
										<a href="" class="btn btn-default sub-btn" alt="">Learn more</a>
									</div>

								</div>

							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">
						<div class="align-center">
							<div class="panel panel-default">
								<div class="panel-body text-center">
									<img src="pillus/images/students-training.jpg" alt="" class="img-responsive">

									<h4 class="text-center">Training Sessions</h4>
									<p>
										We train interested individuals on different engineering courses and software such as AutoCAD, Autodesk Inventor, PDMS and lots more...
									</p>
									<div class="ficon">
										<a href="" class="btn btn-default sub-btn" alt="">Learn more</a>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">
						<div class="align-center">
							<div class="panel panel-default">
								<div class="panel-body text-center">
									<img src="pillus/images/safety-01.jpg" alt="" class="img-responsive">

									<h4 class="text-center">Safety services</h4>
									<p>
										We offer tips on safety precautions in the workshop to our reputable clients as we strictly follow industry standards.
									</p>
									<div class="ficon">
										<a href="" class="btn btn-default sub-btn" alt="">Learn more</a>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>


<section class="trial-bg">
	<div class="overlay">
		<div class="container overlay-ct">

			<div class="col-lg-12">
				<h1 class="text-center" style="font-weight:100 !important;">Our Insight Corner</h1>
				<h5 class="text-center" style="color: #fff !important;">Get abreast with the latest in mechanical engineering and what we at Pillus have been up to...</h5>
				<hr class="wow-hr"><br>

				<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
				<div id="wowslider-container1">
					<div class="ws_images">
						<ul>
							<li><img src="{{ asset('pillus/data1/images/machine.jpg') }}" alt="machine" title="machine" id="wows1_0"/></li>
							<li><a href="http://wowslider.net"><img src="{{ asset('pillus/data1/images/pipingeng.jpg') }}" alt="javascript photo gallery" title="piping-eng" id="wows1_1"/></a></li>
							<li><img src="{{ asset('pillus/data1/images/refinery.jpg') }}" alt="refinery" title="refinery" id="wows1_2"/></li>
						</ul>
					</div>
					<div class="ws_bullets"><div>
						<a href="#" title="machine"><span><img src="{{ asset('pillus/data1/tooltips/machine.jpg') }}" alt="machine"/>1</span></a>
						<a href="#" title="piping-eng"><span><img src="{{ asset('pillus/data1/tooltips/pipingeng.jpg') }}" alt="piping-eng"/>2</span></a>
						<a href="#" title="refinery"><span><img src="{{ asset('pillus/data1/tooltips/refinery.jpg') }}" alt="refinery"/>3</span></a>
					</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">bootstrap slideshow</a> by WOWSlider.com v8.8</div>
					<div class="ws_shadow"></div>
				</div>
				<script type="text/javascript" src="{{ asset('pillus/engine1/wowslider.js') }}"></script>
				<script type="text/javascript" src="{{ asset('pillus/engine1/script.js') }}"></script>
				<!-- End WOWSlider.com BODY section -->
			</div>

		</div>
	</div>
</section>


@include('layouts.footer')

@endsection
