<nav id="myNavbar" class="navbar mynav navbar-default navbar-fixed-top" role="navigation">
	<div class="container-fluid nav-container">
		<div class="navbar-header">
			<button type="button"  id ="nav-toggle" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
				<a class="navbar-brand hidden-lg visible-md visible-xs mobile-header" href="/">
					<span>
						<img src="{{ asset('pillus/images/pillus_logo.png') }}" alt="pillus_logo" width="75px" height="75px">
						 Pillus (PEN)
					</span>

				</a>
				<a class="navbar-brand hidden-xs main-header" href="/">
					<span>
						<img src="{{ asset('pillus/images/pillus_logo.png') }}" alt="pillus_logo" width="85px" height="85px">
						Pillus Engineering Nig. Ltd
					</span>
				</a>
		</div>

		<div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right navbar-nav-mobile hidden-lg hidden-md visible-xs">
					<li>
						<a href="/about">
							About
						</a>
					</li>
					<li>
						<a href="/services">
							Services
						</a>
					</li>

					<li>
						<a href="/careers">
							Careers
						</a>
					</li>
					<li>
						<a href="/insight" class="btn btn-default insight-btn">
							Insight
						</a>
					</li>
			</ul>

			<ul class="nav navbar-nav navbar-right navbar-nav-big hidden-xs">
					<li class="active">
						<a href="/about">
							About
						</a>
					</li>
					<li>
						<a href="/services">
							Services
						</a>
					</li>

					<li class="active">
						<a href="/careers">
							Careers
						</a>
					</li>
					<li>
						<a href="/insight" class="btn btn-default insight-btn">
							Insight
						</a>
					</li>

			</ul>
		</div><!-- /.navbar-collapse -->

	</div>
</nav>
