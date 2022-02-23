@extends('layouts.app')
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
                       <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                       <li class="breadcrumb-item active">Dashboard</li>
                   </ol>
               </div>

           </div>
       </div>
   </div>
   <!-- end page title -->
 @include('UserInc.message')
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
            <h2 class="text-white">  Hi, {{auth()->user()->firstname}} {{auth()->user()->lastname}} </h2>
        </div>

        <div class="card-body ">
            <div class="jumbotron bg-white my-3">
              
            <div class="row">
            <div class="col-mb-3">
                <div class="card one" style="width: 15rem;">
                <div class="card-body">
                <a href="{{route('user.schedule')}}">  <h5 class="card-title"><i class="bx bx-cube"></i> Tasks </h5>
                   <h6 class="card-text"> 12</h6>
                   <p class="card-text"> </p> </a>
                  </div>
              </div>
		        </div>

                <div class="col-mb-3">
                  <div class="card two" style="width: 15rem;">
                      <div class="card-body">
                      <a href="{{route('user.schedule')}}">  <h5 class="card-title"><i class="bx bx-calendar"></i>Current Schedule</h5>
                        <h6 class="card-text"> 12/02/2012</h6>
                        <p class="card-text"> </p> </a>
                       </div>
                    </div>
            </div>
		
            <div class="col-mb-3">
                <div class="card three" style="width: 15rem;">
                    <div class="card-body">
                      <h5 class="card-title"><i class="bx bx-diamond"></i>Completed Task</h5>
                      <h6 class="card-text"> 5</h6>
                      <p class="card-text">  </p>
                    </div>
                  </div>
            </div>

            


            </div>
        </div>

</div>
</div>
</div>

          


			



@endsection