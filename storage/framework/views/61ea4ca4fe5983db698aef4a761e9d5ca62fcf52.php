<?php $__env->startSection('content'); ?>

 <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
   		

   <!-- start page title -->
   <div class="row">
       <div class="col-12">
           <div class="page-title-box d-flex align-items-center justify-content-between">
               <h4 class="mb-0 font-size-18">Lecturers <br> <br>
           <a href="newlecturer" class="btn btn-success btn-sm"><i class="bx bx-user-plus"></i>New Lecturer</a></h4>

               <div class="page-title-right">
                   <ol class="breadcrumb m-0">
                       <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                       <li class="breadcrumb-item active">Lecturers</li>
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
  <table class="table table-centered table-nowrap table-hover table-stripped" id="lecturer_datatable">
                                                <thead>
                                                    <tr style="background: teal; color: #fff;">
                                                    <th>#</th>
                                                         <th>Name</th>
                                                        <th>Designation ID</th>
                                                        <th>Phone Number</th>
                                                         <th>Created At</th>
                                                        <th>Action</th>
                                                </tfoot>
                                                    </tr>
                                                </thead>
                                                <tfoot style="background: teal; color: #fff;">
                                                <th>#</th>
                                                         <th>Name</th>
                                                        <th>Designation ID</th>
                                                        <th>Phone Number</th>
                                                         <th>Created At</th>
                                                        <th>Action</th>
                                                </tfoot>
                                                </tfoot>
                                                <tbody>

                                                    <?php $no = 1;?>
                                                    
                                                   <?php $__currentLoopData = $lecturers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lecturer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                    <tr>
                                                    <td><?php echo e($no); ?></td>
                                                        <td><?php echo e($lecturer->lecturerFname); ?> <?php echo e($lecturer->lecturerLname); ?></td>
                                                        <td><?php echo e($lecturer->designationID); ?></td>
                                                        <td><?php echo e($lecturer->lecturerTel); ?></td>
                                                        <td><?php echo e($lecturer->created_at); ?></td>      
                                                         <td><a href="testtaskb/<?php echo e($lecturer->id); ?>" class="btn btn-success btn-sm">Assign</a></td>
                                                 

                                                       
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

$('#lecturer_datatable').DataTable();






      });

</script>
                        

                       


			


<?php $__env->stopSection(); ?>
<?php echo $__env->make('AdminLayouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laspomonitor\resources\views/AdminPages/lecturer.blade.php ENDPATH**/ ?>