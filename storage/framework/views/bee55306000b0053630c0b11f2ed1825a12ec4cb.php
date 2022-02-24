<?php $__env->startSection('content'); ?>

 <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
   		

   <!-- start page title -->
   <div class="row">
       <div class="col-12">
           <div class="page-title-box d-flex align-items-center justify-content-between">
               <h4 class="mb-0 font-size-18">Attendance Records</h4>

               <div class="page-title-right">
                   <ol class="breadcrumb m-0">
                       <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                       <li class="breadcrumb-item active">Attendance</li>
                   </ol>
               </div>

           </div>
       </div>
   </div>
   <!-- end page title -->
 <?php echo $__env->make('AdminInc.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


 







                   
  <div class="row">
  <div class="col-lg-12">
      <div class="card shadow">
          <div class="card-body" style="background: #fff;">
          
            





<div class="table-responsive">
  <table class="table table-centered table-nowrap table-hover table-stripped" id="grants_datatable">
                                                <thead>
                                                    <tr style="background: teal; color: #fff;">
                                                        <th>#</th>
                                                        <th>Lecturer Name</th>
                                                        <th>Supervisor</th>
                                                        <th>Supervisor Email</th>
                                                        <th>Lecturer Status</th>
                                                        <th>Lecturer Image</th>
                                                        <th>Updated At</th>
                                                       <th>Created At</th>
                                                    </tr>
                                                </thead>
                                                <tfoot style="background: teal; color: #fff;">
                                                <th>#</th>
                                                         <th>Lecturer Name</th>
                                                        <th>Supervisor</th>
                                                        <th>Supervisor Email</th>
                                                        <th>Lecturer Status</th>
                                                        <th>Lecturer Image</th>
                                                        <th>Updated At</th>
                                                       <th>Created At</th>
                                                </tfoot>
                                                <tbody>

                                                    <?php $no = 1;?>
                                                    
                                                   <?php $__currentLoopData = $attendances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attendance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                    <tr>
                                                        <td><?php echo e($no); ?></td>
                                                        <td><?php echo e($attendance->lecturer); ?></td>
                                                        <td><?php echo e($attendance->aFname); ?> <?php echo e($attendance->aLname); ?></td>
                                                        <td><?php echo e($attendance->aEmail); ?></td>
                                                        <td><?php echo e($attendance->status); ?></td>
                                                        <td><?php echo e($attendance->lecturer_img); ?></td>
                                                        <td><?php echo e($attendance->updated_at); ?></td>
                                                        <td><?php echo e($attendance->created_at); ?></td>

                                                       
                                                    </tr>

                                                    <?php $no++;?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>

                                            </table>
                                        </div>







    
              
              
              </div>
               <!-- end card -->
                            </div>
                        </div>
                        <!-- end row -->




































</div>
</div>
</div>

<script src="<?php echo e(asset('js/app.js')); ?>"></script>

<script type="text/javascript">
 $(document).ready(function(){
var _tokens = $('input[name=_token]').val();

$('#grants_datatable').DataTable();






      });

</script>
                        

                       


			


<?php $__env->stopSection(); ?>
<?php echo $__env->make('AdminLayouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laspomonitor\resources\views/AdminPages/attendance.blade.php ENDPATH**/ ?>