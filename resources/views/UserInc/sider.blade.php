<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{route('user.dashboard')}}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span>Dashboards</span>
                    </a>
                    
                </li>

          
                <li class="menu-title">Attendance Report</li>
              
                <li>
                    <a href="{{route('user.attendance')}}" class="waves-effect">
                        <i class="fa fa-address-book" aria-hidden="true"></i>
                        <span>Attendance</span>
                    </a>
                    
                </li>

                <li class="menu-title">Task</li>
              
                <li>
                    <a href="{{route('user.schedule')}}" class="waves-effect">
                        <i class="bx bx-calendar"></i>
                        <span>Schedules</span>
                    </a>
                    
                </li>                         

                

            

                <li class="menu-title">User Profile</li>


                  <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="bx bx-user-circle"></i> Manage Profile
                        <span></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                    <!--  <span class="badge badge-success">2</span> -->
                        <li><a href="{{ route('user.profile')}}"> <i class="bx bx-user"></i>Profile</a></li> 
                        <li>
                    <a href="{{route('user.settings')}}" class="waves-effect">
                        <i class="bx bx-cog"></i>
                        <span>Update Profile</span>
                    </a>
                    </li>

                        
                    </ul>
                </li>

                

                             

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
