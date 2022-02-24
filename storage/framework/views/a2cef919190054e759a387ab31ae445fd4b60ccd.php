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
                                    <h4 class="mb-0 font-size-18">Attendance</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                      
                                            <li class="breadcrumb-item active">Attendance</li><li class="breadcrumb-item active">Form</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->




  <div class="row">
  <div class="col-lg-12">
      <div class="card">
          <div class="card-header py-3 shadow" style="background: teal;">
            <h3 class="text-white"> Attendance Form </h3>    
          </div>

              <div class="card-body bg-light">

              <section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="tabs mx-auto mb-0 clearfix" id="tab-login-register" style="max-width: 500px;">
                <div class="tab-container">

                    <div class="tab-content" id="tab-login">
                        <div class="card my-3">
                            <div class="card-body bg-white shadow">
                                <form id="attendanceForm"  class="mb-0" method="POST" action="<?php echo e(route('attendance.store')); ?>">
                                <?php echo e(csrf_field()); ?>

                                    <h3>Fill the Attendance Form</h3>

                                    <div class="row">
                                        <div class="col-12 form-group">
                                            <label for="email">Email:</label>
                                            <input type="email" class="form-control" name="aEmail" id="email-address" value="<?php echo e(auth()->user()->email); ?>" readonly/>
                                        </div>

                                        <div class="col-12 form-group">
                                            <label for="first-name">First name:</label>
                                            <input type="text" class="form-control" name="aFname" id="first-name" value="<?php echo e(auth()->user()->firstname); ?>" />
                                        </div>

                                        <div class="col-12 form-group">
                                            <label for="last-name">Last name:</label>
                                            <input type="text" class="form-control" id="last-name" name="aLname" value="<?php echo e(auth()->user()->lastname); ?>"/>
                                        </div>
                                        <div class="col-12 form-group">
                                            <label for="member-form-plan">Lecturer:</label>
                                            <select name="lecturer" id="lecturerName" class="form-control">
                                                        <option value="">--- Select Lecturer ---</option>
                                                        <?php $__currentLoopData = $lecturers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lecturer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($lecturer->lecturerFname); ?> <?php echo e($lecturer->lecturerLname); ?>"><?php echo e($lecturer->lecturerFname); ?> <?php echo e($lecturer->lecturerLname); ?></option>">
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                        </div>
                                        <div id="my_camera" class="col-12 form-group"> </div>
                                        <div class="col-12 form-group">
                                            <label for="lecturer_img">Lecturer Picture:</label>
                                           <input type=button value="Take Snapshot" onClick="take_snapshot()">
                                            <input type="file" accept="image/*" capture="camera" class="form-control image-tag" id="lecturer_img" name="lecturer_img" value=""/>
                                        </div>
                                        <div class="col-md-6">

                <div id="results">Your captured image will appear here...</div>

            </div>


                                        <div class="col-12 form-group">
                                            <label for="status">Lecturer Status:</label>
                                            <select type="text" id="lstatus" name="status" class="form-control" style="width: 50%;">
                                            <option value=""> -- Status -- </option>
                                             <option value="Present"> Present </option>
                                                <option value="Absent"> Absent </option>
                                            </select>
                                        </div>
                                        

                                        <div class="col-12 form-group form-submit">
                                            <button class="button button-3d button-black m-0 btn btn-md text-white" style="background-color:teal;" type="submit">Submit</button>
                                            
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

   

              </div>
               <!-- end card -->
                            </div>
                        </div>
</div>
                        <!-- end row -->




















                    </div> <!-- container-fluid -->


                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


                </div>
                <!-- End Page-content -->
           
            </div>
            <!-- end main content-->

   
<!-- end of attendance scripts -->

<script src="<?php echo e(asset('js/app.js')); ?>"></script>

 <script src="<?php echo e(asset('js/jquery-3.3.1.min.js')); ?>"></script>
 
        
 <script src="<?php echo e(asset('assets/js/webcam.js')); ?>"></script> 
 <script src="<?php echo e(asset('assets/js/webcam.min.js')); ?>"></script>

        <script language="JavaScript">
    
    </script>
    
 <script language="JavaScript">
		Webcam.set({
			width: 320,
			height: 240,
			image_format: 'jpeg',
			jpeg_quality: 90
		});
		Webcam.attach( '#my_camera' );

        function take_snapshot() {
			// take snapshot and get image data
			Webcam.snap( function(data_uri) {
				// display results in page
				document.getElementById('results').innerHTML = 
					'<h2>Here is your image:</h2>' + 
					'<img src="'+data_uri+'"/>';
			} );
		}
	</script>



<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laspomonitor\resources\views/UserPages/attendance.blade.php ENDPATH**/ ?>