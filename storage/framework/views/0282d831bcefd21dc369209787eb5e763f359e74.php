<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="menu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="<?php echo e(route('admin.dashboard')); ?>" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span>Dashboards</span>
                    </a>
                    
                </li>

                <li>
                    <a href="<?php echo e(route('admin.users')); ?>" class="waves-effect">
                        <i class="bx bx-user-plus"></i>
                        <span>Supervisors</span>
                    </a>
                
                </li>
                

                <li class="menu-title">Main Pages</li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-columns"></i>
                        <span>Schedules</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo e(route('admin.lecturer')); ?>">Lecturers</a></li>
                        <li><a href="<?php echo e(route('admin.task')); ?>">Create Task</a></li>
                        <li><a href="<?php echo e(route('admin.taskview')); ?>">Task</a></li>
                        <li><a href="<?php echo e(route('admin.attendance')); ?>">Attendance</a></li>
                
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-book"></i>
                        <span>Records</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo e(route('admin.lrecord')); ?>">Lecturer records</a></li>
                        <li><a href="<?php echo e(route('admin.srecord')); ?>">Supervisor Records</a></li>
                </ul>
                </li>

              
                                <li class="menu-title">User Management</li>

                <li>
                    <a href="<?php echo e(route('admin.resetpassword')); ?>" class="waves-effect">
                        <i class="bx bx-cog"></i>
                        <span>Reset Password</span>
                    </a>
                    
                </li>

            <!--    <li>
                    <a href="<?php echo e(route('admin.task')); ?>" class="waves-effect">
                        <i class="bx bx-cog"></i>
                        <span>Tasks</span>
                    </a>
</li> -->

               
             

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->









<?php /**PATH C:\wamp64\www\laspomonitor\resources\views/AdminInc/sider.blade.php ENDPATH**/ ?>