<!DOCTYPE html> 
<html lang="<?php echo e(app()->getLocale()); ?>">
  
<head>
    <meta charset="utf-8">
       <title><?php echo e(config('app.name', 'SRG FIRAT')); ?> | Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="SRG FIRAT Admin Login" name="SRG FIRAT" />
        

      <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
       <!-- App favicon -->
        <link rel="shortcut icon" href="images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?php echo e(asset('assets/css/icons.min.css')); ?>" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?php echo e(asset('assets/css/app.min.css')); ?>" id="app-style" rel="stylesheet" type="text/css" />

  
  </head>
  <body>




   <div class="home-btn d-none d-sm-block">
  <!--           <a href="index.html" class="text-dark"><i class="fas fa-home h2"></i></a> -->
        </div>
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-soft-primary" style="background: teal !important;">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary" style="color: #fff !important;">Welcome Back Admin!</h5>
                                            <p style="color: #fff;">Sign in to continue.</p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="<?php echo e(asset('assets/images/profile-img.png')); ?>" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0"> 
                                <div>
                                    <a href="javascript:void(0);">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="<?php echo e(asset('images/favicon.ico')); ?>" alt="" class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2">
                                    <form class="form-horizontal" action="<?php echo e(route('admin.login')); ?>" method="POST" >
                           <?php echo e(csrf_field()); ?>

                                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" name="email" id="email" value="<?php echo e(old('email')); ?>" placeholder="Enter Your Email Address" required autofocus >

                                            
                         <?php if($errors->has('email')): ?>
                         <div class="alert alert-danger"><?php echo e($errors->first('email')); ?></div>
                         
                        <?php endif; ?>

                                        </div>
                
                                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                            <label for="userpassword">Password</label>
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter Your Password" required >

                                             <?php if($errors->has('password')): ?>
                                               <div class="alert alert-danger"><?php echo e($errors->first('password')); ?></div>
                                  
                                         <?php endif; ?>

                                        </div>
                
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="remember" id="customControlInline" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                            <label class="custom-control-label" for="customControlInline">Remember me</label>
                                        </div>
                                        
                                        <div class="mt-3">
                                            <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Log In</button>
                                        </div>
            
                                      
                                        <div class="mt-4 text-center">
                                            <a href="<?php echo e(route('admin.password.request')); ?>" class="text-muted"><i class="mdi mdi-lock mr-1"></i> Forgot your password?</a>
                                        </div>
                                    </form>
                                </div>
            
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            
                            <div>
                             
                                <p>© 2020 - <?php echo e(date('Y')); ?> Scrabble Connect</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>




       <!-- JAVASCRIPT -->
        <script src="<?php echo e(asset('assets/libs/jquery/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/libs/metismenu/metisMenu.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/libs/simplebar/simplebar.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/libs/node-waves/waves.min.js')); ?>"></script>
        
        <!-- App js -->
        <script src="<?php echo e(asset('assets/js/app.js')); ?>"></script>

  </body>


</html>

<?php /**PATH C:\wamp64\www\laspomonitor\resources\views/AdminAuth/login.blade.php ENDPATH**/ ?>