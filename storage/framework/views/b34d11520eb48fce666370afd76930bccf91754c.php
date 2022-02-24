<!DOCTYPE html>
<html lang="en">

    

<head>
        
        <meta charset="utf-8" />
        <title><?php echo e(config('app.name', 'LASPO MONITOR')); ?> </title>
                  <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="<?php echo e(config('app.name', 'LASPO MONITOR')); ?> />
        <meta content="Research" name="Khaleel Adedeji" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo e(asset('assets/images/favicon.ico')); ?>">

        <!-- Bootstrap Css -->
        <link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?php echo e(asset('assets/css/icons.min.css')); ?>" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?php echo e(asset('assets/css/app.min.css')); ?>" id="app-style" rel="stylesheet" type="text/css" />
         <link href="<?php echo e(asset('assets/libs/sweetalert2/sweetalert2.min.css')); ?>" rel="stylesheet" type="text/css" />
         
        
         <script type="text/javascript" src="https://unpkg.com/webcam-easy/dist/webcam-easy.min.js"></script>

        
      <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/progress.css')); ?>">
      <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/overlay.css')); ?>">
      <link rel="stylesheet" type="text/css" href="<?php echo e(asset('DataTables/datatables.min.css')); ?>">
      
<style type="text/css">
    

    #button_filter{

      display: flex;
      flex-flow: wrap;
      flex-direction: row;

    }


    .numberCircle {
    border-radius: 50%;
    width: 29px;
    height: 29px;
    padding: 0px;

    background: #fff;
    border: 4px solid lightgray;
    color: #666;
    text-align: center;
  
    font: 14px Arial, sans-serif;

    display: flex;
      flex-flow: wrap;
      flex-direction: row;
}


  #chat_list {
        scrollbar-3dlight-color:gold;
        scrollbar-arrow-color:blue;
        scrollbar-base-color:;
        scrollbar-darkshadow-color:blue;
        scrollbar-face-color:;
        scrollbar-highlight-color:;
        scrollbar-shadow-color:
    }

.card.one, .card.two, .card.three {
  background-color: teal;
  margin: 20px;
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

<?php echo $__env->make('UserInc.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('UserInc.sider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="overlays"><div class="loaders"></div></div>
     <?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('UserInc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>





      <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

         <script src="<?php echo e(asset('js/jquery-3.3.1.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/app.js')); ?>"></script>


        <!-- JAVASCRIPT -->
        <script src="<?php echo e(asset('assets/libs/jquery/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/libs/metismenu/metisMenu.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/libs/simplebar/simplebar.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/libs/node-waves/waves.min.js')); ?>"></script>

          <script src="<?php echo e(asset('vendor/unisharp/laravel-ckeditor/ckeditor.js')); ?>"></script>

        <!-- apexcharts -->
        <script src="<?php echo e(asset('assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>

        <script src="<?php echo e(asset('js/moment.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/pages/dashboard.init.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/libs/sweetalert2/sweetalert2.min.js')); ?>"></script>
        
        <script src="<?php echo e(asset('assets/js/webcam.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/webcam.min.js')); ?>"></script>
        
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

       <script src="<?php echo e(asset('DataTables/datatables.js')); ?>" defer ></script>

         
        <!-- App js -->
        <script src="<?php echo e(asset('assets/js/app.js')); ?>"></script>

     
    </body>



</html>
<?php /**PATH C:\wamp64\www\laspomonitor\resources\views/layouts/app.blade.php ENDPATH**/ ?>