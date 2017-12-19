<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <meta name="keywords" content="pillus-engineering-nigeria-limited
 			mechanical AutoCAD-Design Autodesk Inventor
 			piping-engineering-services 3D-Design-and-Modelling pillus-insights mechanical-insights">
 	<meta name="description" content="Our Insight section that gives you the latest in mechanical engineering, Design and Construction">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	 <!-- You can use Open Graph tags to customize link previews.
	 Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
	 <meta property="og:url"           content="{{ Request::url() }}"/>
	 <meta property="og:type"          content="website" />
	 <meta property="og:title"         content="Pillus Engineering Nigeria Ltd." />
	 <meta property="og:description"   content="{!! $insights->title !!}" />
	 <meta property="og:image"         content="" />
	 <!-- End ...You can use Open Graph tags to customize link previews.. -->

    <!-- Styles -->
	 <link rel="shortcut icon" href="/favicon.ico">

	 <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	 <link rel="stylesheet" href="{{ asset('/css/insight-app.css') }}">

	 <!-- End WOWSlider.com HEAD section -->
 	<link rel="stylesheet" href="{{ asset('pillus/font-awesome/css/font-awesome.min.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway" rel="stylesheet">

</head>
<body style="background-color: #f8f8f9 !important;">
	@include('layouts.nav')
        @yield('content')

    <!-- Scripts -->
	 <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

</body>
</html>
