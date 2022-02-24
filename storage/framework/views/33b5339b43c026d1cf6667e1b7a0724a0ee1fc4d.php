<?php $__env->startSection('content'); ?>

 <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
   		

   <!-- start page title -->
   <div class="row">
       <div class="col-12">
           <div class="page-title-box d-flex align-items-center justify-content-between">
               <h4 class="mb-0 font-size-18">Users</h4>

               <div class="page-title-right">
                   <ol class="breadcrumb m-0">
                       <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                       <li class="breadcrumb-item active">Users</li>
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
  <table class="table table-centered table-nowrap table-hover table-stripped" id="users_datatable">
                                                <thead>
                                                    <tr style="background: teal; color: #fff;">
                                                        <th>#</th>
                                                         <th>Name</th>
                                                        <th>User Name</th>
                                                        <th>Email</th>
                                                        <th>Designation ID</th>
                                                        <th>Phone Number</th>
                                                         <th>Created At</th>
                                                    </tr>
                                                </thead>
                                                <tfoot style="background: teal; color: #fff;">
                                                <th>#</th>
                                                         <th>Name</th>
                                                        <th>User Name</th>
                                                        <th>Email</th>
                                                        <th>Designation ID</th>
                                                        <th>Phone Number</th>
                                                         <th>Created At</th>
                                                </tfoot>
                                                <tbody>

                                                    <?php $no = 1;?>
                                                    
                                                   <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                    <tr>
                                                        <td><?php echo e($no); ?></td>
                                                        <td><?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?></td>
                                                        <td>@<?php echo $user->username;?></td>
                                                        <td><?php echo e($user->email); ?></td>
                                                        <td><?php echo e($user->designationID); ?></td>
                                                        <td><?php echo e($user->phone_no); ?></td>
                                                        <td><?php echo e($user->created_at); ?> <a href="testtask/<?php echo e($user->id); ?>" class="btn btn-success btn-sm"> Assign</a></td>
                                                        

                                                       
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

$('#users_datatable').DataTable();




      });

</script>
                        

                       


			


<?php $__env->stopSection(); ?>
<?php echo $__env->make('AdminLayouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laspomonitor\resources\views/AdminPages/users.blade.php ENDPATH**/ ?>