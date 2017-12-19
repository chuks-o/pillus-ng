<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<title>@yield('title')</title>
	<meta name="keywords" content="pillus-engineering-nigeria-limited
			mechanical AutoCAD-Design Autodesk Inventor
			piping-engineering-services 3D-Design-and-Modelling">
	<meta name="description" content="Pillus Engineering Nigeria Limited is Nigeria's leading engineering firm known for
			delivering integrated and resilient mechanical engineering and construction solutions.">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	 <link rel="stylesheet" href="/css/insight-app.css">
	 <link rel="stylesheet" href="pillus/font-awesome/css/font-awesome.min.css">
	 <link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway" rel="stylesheet">

	 <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	 <script type="text/javascript" src="{{ asset('pillus/engine1/jquery.js') }}"></script>
	 <!-- End WOWSlider.com HEAD section -->

</head>
<body>
	@include('layouts.nav')

        @yield('content')


    <!-- Scripts -->
	 <script type="text/javascript" src="js/app.js"></script>
	 <script src="pillus/jsplugins/responsive-slider.js"></script>
	 <script src="pillus/jsplugins/wow.min.js"></script>
	 <script>
	 wow = new WOW(
	 	{

	 	}	)
	 	.init();
	 	</script>
</body>
</html>
