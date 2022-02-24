<?php $__env->startSection('content'); ?>

<form class="top-search-form" action="" method="get">
							<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
						</form>

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		<section id="slider" class="slider-element slider-parallax swiper_wrapper min-vh-60 min-vh-md-100 ">
			<div class="slider-inner">

				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						<div class="swiper-slide dark">
							<div class="container">
								<div class="slider-caption slider-caption-center">
									<h2 data-animate="fadeInUp" class="slider-text" style="color: black;"> LASPO MONITORING APP </h2>
									<h2> <a style="background-color: white; padding: 0.5em; border-radius: 1em;" href="<?php echo e(URL::to('login')); ?>"> Login </a>
								</div>
							</div>
							<div class="swiper-slide-bg" style="background-image: url('images/slider/swiper/bg_img.png');"></div>
						</div>
	

				

			</div>
			<a href="#" data-scrollto="#content" data-offset="100" class="one-page-arrow dark"><i class="icon-angle-down infinite animated fadeInDown"></i></a>
		</section>

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container">
					<div class="row align-items-center">


		
           <!--     <div class="container">
					<div class="row align-items-center">
						<div class="modal fade" id="myModal">
							<div class="modal-dialog">
								<div class="modal-content" style="margin-top:80px;">
									<div class="modal-header">
									<h1 style="color: black;">Laspo <span style="color: #1ABC9C;"> Monitor </span></h1>
									</div>
									<div class="modal-body">
									<p class="lead explain" style="color: black;">
									An app that is used to monitor the efficiency of the staffs through innovation and technology. <br> <br> Kindly Login/Sign Up to the monitoring portal.</p>
									</div>
									<div class="modal-footer">
										<input class="btn btn-primary" data-dismiss="modal" value="Close">
									</div>
								</div>
							</div>

						</div>
						<a href="<?php echo e(URL::to('login')); ?>" data-toggle="modal" data-target="#myModal"></a>
					</div>
				</div>
-->
<!-- 
				<div class="section topmargin-lg"> -->
					<div class="container clearfix">

						
  </div>


</div>

</div>

</div>


</div>
</section><!-- #content end -->

              </div>
               <!-- end card -->
                            </div>
                        </div>
                        <!-- end row -->




<script type="text/javascript">
	$(document).ready(function() {
		setTimeout(function() {
			$("#myModal").modal('show');
			setTimeout(function() {
				$("#myModal").modal('hide');
			}, 30000)
		}, 2000)
	});
</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('MainLayouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laspomonitor\resources\views/MainPages/index.blade.php ENDPATH**/ ?>