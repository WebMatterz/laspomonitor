<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header"  data-sticky-class="not-dark">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="logo">
							<!-- <a href="index.html" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/logo.png" alt="Canvas Logo"></a>
							<a href="index.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo@2x.png" alt="Canvas Logo"></a> -->
							
							<a href="index" class="logo-text" ><div>LASPO<span style="color: #1ABC9C;"> MONITOR</span></div></a>
							<!-- <a href="index.html" class=" logo-text" ><div>Macrotel</div></a> -->
						</div><!-- #logo end -->

						<div class="header-misc">

							

							<!-- Top Cart
							============================================= -->
							
						</div>

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

    
            <!--- Navbar is here -->
           
<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu">

							<ul class="menu-container">
								
																
                @guest
									<li class="menu-item mega-menu">
										<a class="menu-link" href="{{ URL::to('login') }}"><div>Login</div></a>
									</li>

                  @else

              <li class="nav-item">
            <a href="{{ route('user.dashboard') }}" class="btn btn-primary btn-sm" style="color: #fff;">Dashboard</a> &nbsp; &nbsp;
             </li>
                <li class="nav-item">
             <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="color: #fff;" class="btn btn-sm btn-success">Logout
                                                       {{csrf_field()}}
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          {{csrf_field()}}
                                        </form>
                                                 </a>
                </li>

                   @endguest

								<!-- <li class="menu-item mega-menu">
									<a class="menu-link" href="#"><div>Blog</div></a>
								</li> -->
								
							</ul>

						</nav><!-- #primary-menu end -->


