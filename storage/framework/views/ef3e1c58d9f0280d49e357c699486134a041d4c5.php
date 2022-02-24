<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="WebMatterz" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
 <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="SRG FIRAT, research" />

<meta name="keywords" content="Research, Srg Firat, Srg, Firat" />
<title> FIRAT SRG: Grants Form </title>

<!-- Stylesheets
============================================= -->
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo e(asset('css/custom.css')); ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo e(asset('css/swiper.css')); ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo e(asset('css/dark.css')); ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo e(asset('css/font-icons.css')); ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo e(asset('css/animate.css')); ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo e(asset('css/magnific-popup.css')); ?>" type="text/css" />
<link href="<?php echo e(asset('css/css/jquery-ui-1.8.18.custom.css')); ?>" rel="stylesheet" type="text/css"/>
<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">


<meta name="viewport" content="width=device-width, initial-scale=1" />

<!-- Document Title
============================================= -->
<title>FIRAT SRG</title>
<link rel="shortcut icon" type="image/jpg" href="<?php echo e(asset('images/favicon.ico')); ?>"/>
<script src=""></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


</head>


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
							
							<a href="index" class="logo-text" ><div>FIRAT<span style="color: #1ABC9C;"> SRG</span></div></a>
							<!-- <a href="index.html" class=" logo-text" ><div>Macrotel</div></a> -->
						</div><!-- #logo end -->

						<div class="header-misc">

							<!-- Top Search
							============================================= -->
							<div id="top-search" class="header-misc-icon">
								<a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
							</div><!-- #top-search end -->

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
								
								<li class="menu-item mega-menu">
									<a class="menu-link" href="<?php echo e(URL::to('about')); ?>"><div>About Us</div></a>
								</li>
                            <li class="menu-item mega-menu">
                                                <a class="menu-link" href="<?php echo e(URL::to('member')); ?>"><div>Membership</div></a>
                                            </li>
                                <li class="menu-item mega-menu">
                                    <a class="menu-link" href="<?php echo e(route('grant')); ?>"><div>Grants</div></a>
                                </li>
								<li class="menu-item mega-menu">
									<a class="menu-link" href="<?php echo e(URL::to('contact')); ?>"><div>Contact Us</div></a>
								</li>
							
            
                
								<!-- <li class="menu-item mega-menu">
									<a class="menu-link" href="#"><div>Blog</div></a>
								</li> -->
								
							</ul>

						</nav><!-- #primary-menu end -->
            <form class="top-search-form" action="search.html" method="get">
							<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
						</form>

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->


<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="row">

						<div class="col-lg-12">

                        <h3>Congratulations, <?php echo e(auth()->user()->firstname); ?> <br></h3>

							<p>Kindly download the grant application form here. <a href="<?php echo e(URL::to('/')); ?>/images/srgform.doc" target="_blank"> Download Form</a> </p>
                            
							
						</div>

					</div>

				</div>
			</div>
		</section><!-- #content end -->


  <?php echo $__env->make('MainInc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
</body>

<script type="text/javascript" src="<?php echo e(asset('js/jquery-1.10.1.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/jquery-ui-1.8.18.custom.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/main.js')); ?>"></script>
</html><?php /**PATH C:\wamp64\www\laspomonitor\resources\views/MainPages/tasksuccess.blade.php ENDPATH**/ ?>