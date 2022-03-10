 <header id="page-topbar" style="background: teal;">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="<?php echo e(route('user.dashboard')); ?>" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="<?php echo e(asset('assets/images/logoo.png')); ?>" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?php echo e(asset('assets/images/logo-dark.png')); ?>" alt="" height="17" width="50px;">
                                </span>
                            </a>

                            <a href="<?php echo e(route('user.dashboard')); ?>" class="logo logo-light">
                                <span class="logo-sm">
                                <div style="font-size:1.5em; color: #ffffff">LASPO<span style="color: #1ABC9C; height: 10; font-size: 1em;"> M.</span></div>
                                </span>
                                <span class="logo-lg">
                                <div style="font-size:2em; color: #ffffff">LASPO<span style="color: #1ABC9C; height: 19; font-size: 1em;"> M.</span></div>
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars" style="color: #fff;"></i>
                        </button>

                        <!-- App Search-->
<!--           <form class="app-search d-none d-lg-block">
                       

                               <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Enter Task ID" id="enter_task_id">
                                          
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit" id="search_btn"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                         
                        </form> -->

                
                    </div>

                    <div class="d-flex">

                                           


                

                        <div class="dropdown d-none d-lg-inline-block ml-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                <i class="bx bx-fullscreen" style="color: #fff;"></i>
                            </button>
                        </div>

                        

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="<?php echo e(asset('assets/images/users/noimage.jpg')); ?>"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ml-1" style="color: #fff;"><?php echo e(auth()->user()->username); ?></span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block" style="color: #fff;"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                            
                                
                                <a class="dropdown-item d-block" href="<?php echo e(route('user.settings')); ?>"><i class="bx bx-user font-size-16 align-middle mr-1"></i> Update Profile</a>
                        
                                <div class="dropdown-divider"></div>
                                
                                <a class="dropdown-item d-block" href="<?php echo e(URL::to('index')); ?>"><i class="bx bx-home font-size-16 align-middle mr-1"></i> Home Page</a>
                        
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" ><i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i>  logout
                                                <?php echo e(csrf_field()); ?>

                                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                          <?php echo e(csrf_field()); ?>

                                        </form>
                                            </a>
                            </div>
                        </div>


    



            
                    </div>
                </div>
            </header> <!-- ========== Left Sidebar Start ========== -->





            <script src="<?php echo e(asset('js/app.js')); ?>"></script>
            <script type="text/javascript">
                $(document).ready(function(){
var _tokens = $('input[name=_token]').val();
    function addCommas(nStr){

    nStr +='';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while(rgx.test(x1)){
      x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return x1 + x2;
  }



                });
            </script>


           <?php /**PATH C:\wamp64\www\laspomonitor\resources\views/UserInc/header.blade.php ENDPATH**/ ?>