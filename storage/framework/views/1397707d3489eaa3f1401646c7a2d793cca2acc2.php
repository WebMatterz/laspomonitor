
<?php $__env->startSection('content'); ?>

   	 	

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">User Profile</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                      
                                            <li class="breadcrumb-item active">User Profile</li><li class="breadcrumb-item active">Supervisor</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->


						<div class="row my-4">
				<div class="col-lg-12 my-3 rounded-sm">
					
						<div class="col-7 d-flex flex-row shadow-sm p-3"  style="border-radius: 2px; border-left: 8px solid teal;">
							<div class="img-container">
								<img class="d-block" src="<?php echo e(asset('assets/images/users/noimage.jpg')); ?>" style="border-radius: 6px;max-width: 50%; height: auto; margin-left: 10%;">
							</div>
							<div class="col-7">
								<h4 class="my-3">Hi,</h4>
								<h3> <?php echo e(auth()->user()->firstname); ?> <?php echo e(auth()->user()->lastname); ?></h3>
							</div>
						</div>

					</div>
						

				
				<div class="col-lg-10 my-3">
					<div class="card shadow-sm">
						<div class="card-header"  style="background-color: teal;">
							<h3 class="text-white text-center">Your Bio</h3>
						</div>
						<div class="card-body bg-white">
							<table class="table table-white table-striped table-borderless table-responsive-md">
								<tr>
									<th>Username</th>
									<th>Firstname</th>
									<th>Lastname</th>
								</tr>
								
								<tr>
									<td><?php echo e(auth()->user()->username); ?></td>
									<td><?php echo e(auth()->user()->firstname); ?></td>
									<td><?php echo e(auth()->user()->lastname); ?></td>
								</tr>

								<tr>
									<th>Phone Number</th>
									<th>Email Address</th>
									<th>Designation ID</th>
								</tr>

								<tr>
									<td><?php echo e(auth()->user()->phone_no); ?></td>
									<td><?php echo e(auth()->user()->email); ?></td>
									<td><?php echo e(auth()->user()->designationID); ?></td>
								</tr>

								
								
							</table>
						</div>
						
						<div class="card-footer">
						<a href="<?php echo e(route('user.settings')); ?>" class="btn btn-sm text-center text-white p-2" style="background-color: teal;">Change Profile</a>
					</div>

					</div>
				</div>

			
			</div>
		





                    </div> <!-- container-fluid -->

    </div>
                <!-- End Page-content -->

                
             
            </div>
            <!-- end main content-->




<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laspomonitor\resources\views/UserPages/profile.blade.php ENDPATH**/ ?>