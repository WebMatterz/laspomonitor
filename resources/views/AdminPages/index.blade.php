@extends('AdminLayouts.app')
@section('content')

 <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
   		

   <!-- start page title -->
   <div class="row">
       <div class="col-12">
           <div class="page-title-box d-flex align-items-center justify-content-between">
               <h4 class="mb-0 font-size-18">Dashboard</h4>

               <div class="page-title-right">
                   <ol class="breadcrumb m-0">
                       <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                       <li class="breadcrumb-item active">Dashboard</li>
                   </ol>
               </div>

           </div>
       </div>
   </div>
   <!-- end page title -->
 @include('AdminInc.message')


 @if (Session::has('success'))
                        <div class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <p>{{ Session::get('success') }}</p>
                        </div>
                    @endif










                    <div class="row">
  <div class="col-lg-12">
      <div class="card shadow">
          <div class="card-header" style="background: teal;">
            <h2 class="text-white">  Hi, Admin</h2>
        </div>

        <div class="card-body ">
            <div class="jumbotron bg-white my-3">
              
            <div class="row">
            <div class="col-mb-3">
                <div class="card one" style="width: 15rem;">
                <div class="card-body">
                <a href="{{route('admin.lecturer')}}">  <h5 class="card-title"><i class="bx bx-user"></i> Lecturers </h5>
                   <h6 class="card-text"> {{DB::table('lecturers')->count() }}</h6>
                   <p class="card-text"> </p> </a>
                  </div>
              </div>
		        </div>

                <div class="col-mb-3">
                  <div class="card two" style="width: 15rem;">
                      <div class="card-body">
                      <a href="{{route('admin.users')}}">  <h5 class="card-title"><i class="bx bx-user"></i> Supervisors </h5>
                        <h6 class="card-text"> {{DB::table('users')->count() }} </h6>
                        <p class="card-text"> </p> </a>
                       </div>
                    </div>
            </div>
		
            <div class="col-mb-3">
                <div class="card three" style="width: 15rem;">
                    <div class="card-body">
                    <a href="{{route('admin.attendance')}}">       <h5 class="card-title"><i class="bx bx-calendar"></i>Attendance</h5>
                      <h6 class="card-text"> {{DB::table('attendances')->count() }}</h6>
                      <p class="card-text">  </p> </a>
                    </div>
                  </div>
            </div>
            <!-- second row-->

            <div class="col-mb-3">
                <div class="card one" style="width: 15rem;">
                <div class="card-body">
                <a href="{{route('admin.taskview')}}">   <h5 class="card-title"><i class="bx bx-calendar"></i> Last Assigned Task </h5>
                   <h6 class="card-text"> 08/02/2022</h6>
                   <p class="card-text"> </p> </a>
                  </div>
              </div>
		        </div>
                
                <div class="col-mb-3">
                <div class="card three" style="width: 15rem;">
                    <div class="card-body">
                    <a href="{{route('admin.taskview')}}">  <h5 class="card-title"><i class="bx bx-diamond"></i>Pending Task</h5>
                      <h6 class="card-text"> {{DB::table('tasks')->count() }}</h6>
                      <p class="card-text">  </p> </a>
                    </div>
                  </div>
            </div>

                <div class="col-mb-3">
                  <div class="card two" style="width: 15rem;">
                      <div class="card-body">
                      <a href="{{route('admin.taskview')}}">    <h5 class="card-title"><i class="bx bx-cube"></i>Tasks</h5>
                        <h6 class="card-text"> {{DB::table('tasks')->count() }}</h6>
                        <p class="card-text"> </p> </a>
                       </div>
                    </div>
            </div>
		
           

            


            </div>
        </div>

</div>
</div>
</div>

<script src="{{asset('js/app.js')}}"></script>

<script type="text/javascript">
 $(document).ready(function(){
var _tokens = $('input[name=_token]').val();


$('#users_datatable').DataTable();





      });

</script>
                        

                       


			


@endsection