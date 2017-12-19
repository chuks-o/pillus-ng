<!doctype html>
<html lang="en">
<head>
	<title>Dashboard | Pillus Nigeria</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="icon" sizes="96x96" href="/favicon.ico">

	<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{ asset('/css/dashboard.css') }}">
	<link rel="stylesheet" href="{{ asset('pillus/font-awesome/css/font-awesome.min.css') }}">

	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->

	<!-- GOOGLE FONTS -->
	<!-- ICONS -->

</head>
<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<span>
					<img src="{{ asset('pillus/images/pillus_logo.png') }}" alt="pillus_logo" width="50px" height="28px" >
					 Pillus Engineering Nig. Ltd
				</span>

			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<form class="navbar-form navbar-left">
					<div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Search dashboard...">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
					</div>
				</form>
				<div class="navbar-btn navbar-btn-right">
					<!-- <a class="btn btn-success update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a> -->
				</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">

					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="{{ url('admin001') }}" class="active"><i class="lnr lnr-home"></i> <span>All Insights</span></a></li>
						<li><a href="{{ url('admin001/create') }}" class=""><i class="lnr lnr-code"></i> <span>Create a Post</span></a></li>
						<li><a href="charts.html" class=""><i class="lnr lnr-chart-bars"></i> <span>Roles</span></a></li>
						<li>
							 <a href="{{ route('logout') }}"
								  onclick="event.preventDefault();
											  document.getElementById('logout-form').submit();">
											  <i class="fa fa-sign-out"></i>
								  Logout
							 </a>

							 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								  {{ csrf_field() }}
							 </form>
						</li>

					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">@yield('subtitle')</h3>
							<p class="panel-subtitle">Pillus Engineering</p>
						</div>
						<div class="panel-body">
							<!-- <div class="row">
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-download"></i></span>
										<p>
											<span class="number">1,252</span>
											<span class="title">Downloads</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-shopping-bag"></i></span>
										<p>
											<span class="number">203</span>
											<span class="title">Sales</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-eye"></i></span>
										<p>
											<span class="number">274,678</span>
											<span class="title">Visits</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-bar-chart"></i></span>
										<p>
											<span class="number">35%</span>
											<span class="title">Conversions</span>
										</p>
									</div>
								</div>
							</div> -->
							@yield('content')

						</div>
					</div>
					<!-- END OVERVIEW -->

				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 Pillus Nigeria. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="{{ asset('/js/tag.js') }}"></script>
	<script src="{{ asset('/js/admin.js') }}"></script>
	<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
	<script src="{{ asset('/js/editor.js') }}"></script>
	<script>
		 CKEDITOR.replace( 'article-ckeditor' );
	</script>

</body>

</html>
