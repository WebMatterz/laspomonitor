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
                                    <h4 class="mb-0 font-size-18">Settings</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                      
                                            <li class="breadcrumb-item active">Profile</li><li class="breadcrumb-item active">Settings</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->







  <div class="row">
  <div class="col-lg-12">
      <div class="card shadow">
          <div class="card-body" style="background: teal;">
          
            <form action="{{route('user.settingsupdate')}}" method="post" enctype="multipart/form-data">
           
 
 {{ csrf_field() }}

 <div class="form-row">

  <div class="col">
     <div class="form-group">
          <label style="color: #fff;">FirstName</label>
           <input type="text" class="form-control" id="firstname" name="firstname" value="{{auth()->user()->firstname}}">
         <small style="color: #fff; font-weight: 700;"></small>
        </div>
  </div>
  <div class="col">
    <div class="form-group">
          <label style="color: #fff;">LastName</label>
           <input type="text" class="form-control" id="lastname" name="lastname" value="{{auth()->user()->lastname}}">
         <small style="color: #fff; font-weight: 700;"></small>
        </div>
  </div>
   
 </div>



  <div class="form-row">

  <div class="col-6">
     <div class="form-group">
          <label style="color: #fff;">Username</label>
           <input type="text" class="form-control" value="{{auth()->user()->username}}" readonly >
         <small style="color: #fff; font-weight: 700;"></small>
        </div>
  </div>
 
  <div class="col-6">
    <div class="form-group">
          <label style="color: #fff;">Email</label>
           <input type="email" class="form-control" id="email" name="email" value="{{auth()->user()->email}}">
         <small style="color: #fff; font-weight: 700;"></small>
        </div>
</div>

</div>

<div class="form-row">

  <div class="col-6">
     <div class="form-group">
          <label style="color: #fff;">Phone Number</label>
           <input type="tel" class="form-control" id="phone_no" name="phone_no" value="{{auth()->user()->phone_no}}" >
         <small style="color: #fff; font-weight: 700;"></small>
        </div>
  </div>
 
  <div class="col-6">
     <div class="form-group">
          <label style="color: #fff;">Designation ID</label>
           <input type="text" class="form-control" id="designationID" name="designationID" value="{{auth()->user()->designationID}}" >
         <small style="color: #fff; font-weight: 700;"></small>
        </div>
  </div>
  
</div>


 <div class="form-row">


  <div class="col-6">
    <div class="form-group">
          <label style="color: #fff;">Password</label>
           <input type="text" name="password" id="password" class="form-control" placeholder="Change Your Password Only When You Want" >
         <small style="color: #fff; font-weight: 700;">It's optional, only when neccessary</small>
        </div> 
         
  </div>
  
  
</div>



   <div class="loader"></div>
 <button class="btn btn-success" id="settings_button">Update</button>




      </form>
    
              
              
              </div>
               <!-- end card -->
                            </div>
                        </div>
                        <!-- end row -->






                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
             
            </div>
            <!-- end main content-->




<script src="{{asset('js/app.js')}}"></script>

 <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    

<script type="text/javascript">
	
	$(document).ready(function(){

var _tokens = $('input[name=_token]').val();

function validateEmail(email) 
    {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
    }




$('#settings_button').click(function(event){


  event.preventDefault();

  var firstname = $('#firstname').val();
  var lastname = $('#lastname').val();
  var email = $('#email').val();
  var degree = $('#degree').val();
  var institution = $('#institution').val();
  var password = $('#password').val();
  var state = $('#state').val();
  var department = $('#department').val();
  var address = $('#address').val();
  var image = $('#image').val();
  var country = $('#country').val();
  var lostudy = $('#lostudy').val();
  var phone_no = $('#phone_no').val();



  if (firstname == '') {

swal("FirstName!", "Field is required", "info");

  }else if (lastname == '') {

swal("Lastname!", "Field is required", "info");

  }else if (degree == '') {

swal("Degree!", "Field is required", "info");

  }else if (email == '') {

swal("Email!", "Field is required", "info");

  }else if (validateEmail(email) == false) {

 swal("Email Validator!", "Invalid Email Address", "error");

  }else if (state == '') {

swal("State!", "Field is required", "info");

  }else if (department == '') {

swal("Department!", "Field is required", "info");

  }else if (address == '') {

swal("Address!", "Field is required", "info");

  }else if (country == '') {

swal("Country!", "Field is required", "info");

  }else if (lostudy == '') {

swal("lostudy!", "Field is required", "info");

  }else if (phone_no == '') {

swal("Phone Contact!", "Field is required", "info");

  }else{

    swal({
      title: "Are you sure?",
      text:"",
      icon: "warning",
      buttons: [
        'No, cancel it!',
        'Yes, I am sure!'
      ],
      dangerMode: true,
    }).then(function(isConfirm) {
      if (isConfirm) {

    $('.overlays').show();
    $('#settings_button').hide();   

         $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},        
        url:"{{route('user.settingsupdate')}}",
        method:"POST",
        data:{firstname:firstname,lastname:lastname,state:state,degree:degree,institution:institution,email:email,department:department,password:password,address:address,image:image,country:country,lostudy:lostudy,phone_no:phone_no,_tokens:_tokens},
        success:function(data){

    console.log(data);

    if (data == 'success') {
swal("Success!", "Updated Successfully", "success");
$('#password').val('');

$('.overlays').hide();
    $('#settings_button').show();

    }else{

swal("Opps!", data, "error");

    $('.overlays').hide();
    $('#settings_button').show();


    }





          }
        
         })  



      
      } else {
        swal("Cancelled", "No data was sent to database" ,"info");
      }
    })



  }









});





	});
</script>            







@endsection 