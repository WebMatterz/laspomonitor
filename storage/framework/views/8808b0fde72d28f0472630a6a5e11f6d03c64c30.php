<!DOCTYPE html>
<html lang="en">

<head>
        
        <meta charset="utf-8" />
        <title><?php echo e(config('app.name', 'LASPO MONITOR')); ?> | <?php echo e($title); ?></title>
                  <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="<?php echo e(config('app.name', 'LASPO MONITOR')); ?> | <?php echo e($title); ?>" name="<?php echo e($title); ?>" />
       
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo e(asset('assets/images/favicon.ico')); ?>">

  
         <link href="<?php echo e(asset('assets/libs/sweetalert2/sweetalert2.min.css')); ?>" rel="stylesheet" type="text/css" />

          
      

      <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/progress.css')); ?>">
      <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/overlay.css')); ?>">
      <link rel="stylesheet" type="text/css" href="<?php echo e(asset('DataTables/datatables.min.css')); ?>">
      <link href="<?php echo e(asset('assets/libs/select2/css/select2.min.css')); ?>" rel="stylesheet" type="text/css" />

      <!-- Bootstrap Css -->
        <link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?php echo e(asset('assets/css/icons.min.css')); ?>" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?php echo e(asset('assets/css/app.min.css')); ?>" id="app-style" rel="stylesheet" type="text/css" />
        <style type="text/css">
          body{
            font-family: Arial !important;

          }

          .card.one, .card.two, .card.three {
  background-color: teal;
  margin: 0px 20px 50px;
}

h5.card-title > i {
  background-color: rgba(255, 155, 68, 0.2);
border-radius: 100%;
color: #ff9b44;
display: inline-block;
float: left;
font-size: 30px;
height: 60px;
line-height: 60px;
margin-right: 20px;
text-align: center;
width: 60px;
}


h5.card-title {
    color: white;
    font-family: agency fb;
    font-weight: bold;
    font-size: 1.4em;
    margin-bottom: 0.2em;
    padding: 0.5em;
}

h6.card-text {
    color: white;
    font-family: agency fb;
    font-weight: bold;
    font-size: 1.7em;
}

        </style>
    </head>

    <body data-sidebar="dark">

 <!-- Begin page -->
<div id="layout-wrapper">

<?php echo $__env->make('AdminInc.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('AdminInc.sider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="overlays"><div class="loaders"></div></div>
     <?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('AdminInc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>





      <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="<?php echo e(asset('assets/libs/jquery/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/libs/metismenu/metisMenu.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/libs/simplebar/simplebar.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/libs/node-waves/waves.min.js')); ?>"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

        <!-- apexcharts -->
    <!--     <script src="<?php echo e(asset('assets/libs/apexcharts/apexcharts.min.js')); ?>"></script> -->

         <script src="<?php echo e(asset('assets/libs/select2/js/select2.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/moment.js')); ?>"></script>
       

       <!--  <script src="<?php echo e(asset('assets/libs/sweetalert2/sweetalert2.min.js')); ?>"></script> -->
        
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
       <script src="<?php echo e(asset('DataTables/datatables.js')); ?>" defer ></script>
        <!-- App js -->
          <script src="<?php echo e(asset('assets/js/pages/form-advanced.init.js')); ?>"></script>
         <!--     <script src="<?php echo e(asset('assets/js/pages/sweet-alerts.init.js')); ?>"></script> -->
<!--         <script src="<?php echo e(asset('assets/js/pages/dashboard.init.js')); ?>"></script> -->
        <script src="<?php echo e(asset('assets/js/app.js')); ?>"></script>
    </body>




</html>
<?php /**PATH C:\wamp64\www\laspomonitor\resources\views/AdminLayouts/app.blade.php ENDPATH**/ ?>