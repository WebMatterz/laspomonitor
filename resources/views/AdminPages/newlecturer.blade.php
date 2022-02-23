@extends('AdminLayouts.app')
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
                                    <h4 class="mb-0 font-size-18">New Lecturer</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                      
                                            <li class="breadcrumb-item active">Create</li><li class="breadcrumb-item active">Lecturer</li>
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
            <h3 class="text-white"> New Lecturer </h3>    
          </div>

              <div class="card-body bg-light">

              <section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="tabs mx-auto mb-0 clearfix" id="tab-login-register" style="max-width: 500px;">
                <div class="tab-container">

                    <div class="tab-content" id="tab-login">
                        <div class="card my-3">
                            <div class="card-body bg-white shadow">
                                <form id="lecturerForm"  class="mb-0" method="POST" action="{{route('lecturer.store')}}">
                                {{ csrf_field() }}
                                    <h3>Create New Lecturer</h3>

                                    <div class="row">
                                      
                                        <div class="col-12 form-group">
                                            <label for="lecturerFname">First name:</label>
                                            <input type="text" class="form-control" name="lecturerFname" id="lecturerFname" value="" />
                                        </div>

                                        <div class="col-12 form-group">
                                            <label for="lecturerLname">Last name:</label>
                                            <input type="text" class="form-control" id="lecturerLname" name="lecturerLname" value=""/>
                                        </div>

                                        <div class="col-12 form-group">
                                            <label for="last-name">Phone Number:</label>
                                            <input type="text" class="form-control" id="lecturerTel" name="lecturerTel" value=""/>
                                        </div>

                                        <div class="col-12 form-group">
                                            <label for="designationID">Designation ID:</label>
                                            <select id="designationID" name="designationID" class="form-control" style="width: 50%;">
                                            <option value="">--- Select Designation ---</option>
                                                <option value="Junior"> Junior Lecturer </option>
                                                <option value="Senior"> Senior Lecturer </option>
                                                <option value="Mid-level"> Mid-Level Lecturer </option>
                                            </select>
                                        </div>
                                        

                                        <div class="col-12 form-group form-submit">
                                            <button class="button button-3d button-black m-0 btn btn-md text-white" style="background-color:teal;" type="submit">Submit</button>
                                            
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

        </div>
    </div>
</section><!-- #content end -->

   

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

   
<!-- end of attendance scripts -->

<script src="{{asset('js/app.js')}}"></script>

 <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    







@endsection 