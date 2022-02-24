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
                                    <h4 class="mb-0 font-size-18">Schedules</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                      
                                            <li class="breadcrumb-item active">View</li><li class="breadcrumb-item active">Schedules</li>
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
            <h3 class="text-white"> Check your task for the week/month. </h3>    
          </div>

              <div class="card-body bg-white">

              
<div class="container clearfix">


<div class="heading-block topmargin-lg center">
<span class="my-4 py-4 zippyworld">  
    <?php if($tasks != ''): ?>
    Schedule Register
<?php else: ?>
No schedule is currently available at the moment.
<?php endif; ?></span>

<div class="table-responsive">
  <table class="table table-centered table-nowrap table-hover table-stripped" id="schedule_datatable">
                                                <thead>
                                                    <tr style="background: teal; color: #fff;">
                                                        <th>#</th>
                                                         <th>Lecturer Name</th>
                                                        <th>Supervisor</th>
                                                        <th>Assigned Date</th>
                                                       <th>Created At</th>
                                                    </tr>
                                                </thead>
                                                <tfoot style="background: teal; color: #fff;">
                                                <th>#</th>
                                                         <th>Lecturer Name</th>
                                                        <th>Supervisor</th>
                                                        <th>Assigned Date</th>
                                                       <th>Created At</th>
                                                </tfoot>
                                                <tbody>

                                                    <?php $no = 1;?>
                                                    
                                                   <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                    <tr>
                                                        <td><?php echo e($no); ?></td>
                                                        <td><?php echo e($task->lecturerName); ?></td>
                                                        <td><?php echo e($task->supervisorName); ?></td>
                                                        <td><?php echo e($task->assignedDate); ?></td>
                                                        <td><?php echo e($task->created_at); ?></td>

                                                       
                                                    </tr>

                                                    <?php $no++;?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>

                                            </table>
                                        </div>

</div>

<!-- <div class="content-wrap"> -->
      <!-- <div class="container clearfix"> -->



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



































                    </div> <!-- container-fluid -->




















<div class="row" id="show_result" style="display: none;">
  <div class="col-lg-12">
      <div class="card shadow">
          <div class="card-body" style="background: #fff;">

    
            <div class="table-responsive">
  <table class="table table-centered table-nowrap table-hover table-stripped" id="players_datatable">
                                                <thead>
                                                    <tr style="background: teal; color: #fff;">
                                                        <th>#</th>
                                                        <th>Player Name</th>
                                                        <th>UserName</th>
                                                        
                                                        
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tfoot style="background: teal; color: #fff;">
                                                    <th>#</th>
                                                        <th>Player Name</th>
                                                        <th>UserName</th>
                                                        
                                                        
                                                        <th>Action</th>
                                                </tfoot>
                                                <tbody id="players_list">
                                                    
                                  
                                                </tbody>

                                            </table>
                                        </div>
              
              
              </div>
               <!-- end card -->
                            </div>
                        </div>
                        <!-- end row -->






                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->























                </div>
                <!-- End Page-content -->

                
             
            </div>
            <!-- end main content-->




<script src="<?php echo e(asset('js/app.js')); ?>"></script>

 <script src="<?php echo e(asset('js/jquery-3.3.1.min.js')); ?>"></script>
    
 <script type="text/javascript">
 $(document).ready(function(){
var _tokens = $('input[name=_token]').val();

$('#schedule_datatable').DataTable();






      });

</script>


<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laspomonitor\resources\views/UserPages/schedule.blade.php ENDPATH**/ ?>