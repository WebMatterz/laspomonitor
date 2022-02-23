@extends('layouts.app')
@section('content')

   	 	

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Success</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                      
                                            <li class="breadcrumb-item active">Attendance</li><li class="breadcrumb-item active">Register</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->




  <div class="row">
  <div class="col-lg-12">
      <div class="card">
          <div class="card-header py-3 shadow" style="background: teal;">
            <h3 class="text-white"> Attendance Submission </h3>    
          </div>

              <div class="card-body bg-light">

             


        <section id="content">
			<div class="content-wrap">
				<div class="container">
					<div class="row align-items-center">

						<div class="col-lg-7">
							<div class="heading-block">
								<h1>Congratulations, {{auth()->user()->firstname}} <br></h1>
							</div>
							<p class="lead explain">Record successfully submitted.</p>
							<p></p>
						</div>

						<div class="col-lg-5 align-self-end">

							<div class="position-relative overflow-hidden">
								<img src="images/services/success.jpg" data-animate="fadeInUp" data-delay="100" alt="">
								<!-- <img src="images/services/main-fmobile.png" style="top: 0; left: 0; min-width: 100%; min-height: 100%;" data-animate="fadeInUp" data-delay="400" alt="iPhone" class="position-absolute"> -->
							</div>

						</div>

					</div>
				</div>
            </div>
</section>

              </div>
               <!-- end card -->
                            </div>
                        </div>
</div>
                        <!-- end row -->




















                    </div> <!-- container-fluid -->


                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


                </div>
                <!-- End Page-content -->
           
            </div>
            <!-- end main content-->

  
<!-- end of payment scripts -->

<script src="{{asset('js/app.js')}}"></script>

 <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    







@endsection 