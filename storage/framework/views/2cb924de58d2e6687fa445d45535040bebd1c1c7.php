<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="WebMatterz" />
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
     <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="LASPO MONITOR, laspo" />

<meta name="keywords" content="Monitor, Laspo Monitor" />
<title> LASPO MONITOR: Login </title>

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="css/custom.css" type="text/css" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<link rel="stylesheet" href="css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
<link href="css/jquery-ui-1.8.18.custom.css" rel="stylesheet" type="text/css"/>
<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	
	
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>FIRAT SRG</title>
	<link rel="shortcut icon" type="image/jpg" href="images/favicon.ico"/>
	<script src="js/jquery.js"></script>
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
							
							<a href="index" class="logo-text" ><div>LASPO<span style="color: #1ABC9C;"> MONITOR</span></div></a>
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
									<a class="menu-link" href="<?php echo e(URL::to('about')); ?>"><div>About</div></a>
								</li>
                <li class="menu-item mega-menu">
									<a class="menu-link" href="<?php echo e(URL::to('schedule')); ?>"><div>Schedule</div></a>
								</li>
								<li class="menu-item mega-menu">
									<a class="menu-link" href="<?php echo e(URL::to('contact')); ?>"><div>Contact</div></a>
								</li>
							
            
                
								<!-- <li class="menu-item mega-menu">
									<a class="menu-link" href="#"><div>Blog</div></a>
								</li> -->
								
							</ul>

						</nav><!-- #primary-menu end -->
            <form class="top-search-form" action="" method="get">
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
                
					<div class="tabs mx-auto mb-0 clearfix" id="tab-login-register" style="max-width: 500px;">

                        <h3>Don't have an account? Sign up <a href="<?php echo e(URL::to('register')); ?>">here</a></h3>
						<div class="tab-container">
                            

							<div class="tab-content" id="tab-login">
								<div class="card mb-0">
									<div class="card-body" style="padding: 40px;">
										<form id="login-form" name="login-form" class="mb-0"  method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo e(csrf_field()); ?>


											<h3>Login to your Account</h3>

											<div class="row">
												<div class="col-12 form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
													<label for="login-form-username">Email:</label>
													<input type="email" name="email" id="email" class="form-control" value="<?php echo e(old('email')); ?>" required />
                          <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                        </div>

												<div class="col-12 form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
													<label for="login-form-password">Password:</label>
													<input type="password" id="login-form-password" name="password" class="form-control" required />
                          <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
												</div>
                                                <div class="form-group form-check" style="margin-right: 150px;">
                                                    <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                                    <label class="form-check-label" >Remember me</label>
                                                </div>
                                                <div class="form-group form-check" >
                                                    <input type="checkbox" onclick="myFunction()">
                                                    <label class="form-check-label" >Show password</label>
                                                </div>
                                                

												<div class="col-12 form-group">
													<button class="button button-3d button-black m-0" id="login-form-submit" name="login-form-submit" value="login">Login</button>
													<a href="#" class="float-right">Forgot Password?</a>
                                                    
												</div>
											</div>

										</form>
									</div>
								</div>
							</div>

						</div>

					</div>

				</div>
			</div>
		</section><!-- #content end -->


<?php echo $__env->make('MainInc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<script>
function myFunction() {
  var x = document.getElementById("login-form-password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

<script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.8.18.custom.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</html><?php /**PATH C:\wamp64\www\laspomonitor\resources\views/auth/login.blade.php ENDPATH**/ ?>