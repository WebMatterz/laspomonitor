@extends('MainLayouts.app')
@section('content')

<form class="top-search-form" action="" method="get">
							<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
						</form>

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		

		<section id="slider" class="slider-element slider-parallax swiper_wrapper min-vh-60 min-vh-md-100 ">
			<div class="slider-inner">

				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						<div class="swiper-slide dark">
							<div class="container">
							
							</div>
							<div class="swiper-slide-bg" style="background-image: url('images/slider/swiper/contactus.jpg');"></div>
						</div>
					</div>
				</div>

				

			</div>
			<a href="#" data-scrollto="#content" data-offset="100" class="one-page-arrow dark"><i class="icon-angle-down infinite animated fadeInDown"></i></a>
		</section>

		<!-- Content
		============================================= -->
		

		<section id="content">
			<div class="content-wrap">
				<div class="container">
                    <div class="heading-block topmargin-lg center">
						<h2 style="color: black;">GOT ANY QUESTION?</h2>
						<span class="mx-auto" style="color: black;">We'd love to help</span>
					</div>

					<div class="row gutter-40 col-mb-80">
						<!-- Postcontent
						============================================= -->
						<div class="col-lg-9">

							<h3>Send us an Email</h3>

							<div class="form">

								

								<form>
                {{ csrf_field() }}

									<div class="row">
										<div class="col-md-4 form-group">
											<label for="name">Name <small>*</small></label>
											<input type="text"  name="name" id="name" value="" class="sm-form-control required" />
										</div>

										<div class="col-md-4 form-group">
											<label for="email">Email <small>*</small></label>
											<input type="email"  name="email" id="email" value="" class="required email sm-form-control" />
										</div>

										<div class="col-md-4 form-group">
											<label for="phone">Phone</label>
											<input type="text"  name="phone" id="phone" value="" class="sm-form-control" />
										</div>

										<div class="w-100"></div>

										<div class="col-md-8 form-group">
											<label for="subject">Subject <small>*</small></label>
											<input type="text" name="subject" id="subject" class="required sm-form-control" />
										</div>


										<div class="w-100"></div>

										<div class="col-12 form-group">
											<label for="message">Message <small>*</small></label>
											<textarea class="required sm-form-control" id="message" name="message" rows="6" cols="30"></textarea>
										</div>

										<!-- <div class="col-12 form-group d-none">
											<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
										</div> -->

										
										<input class="button button-3d m-0" type="submit" id="mail_btn" name="submit" value="submit feedback"> <span id="status"></span>
									
									</div>

									

								</form>
							</div>

						</div><!-- .postcontent end -->

						<!-- Sidebar
						============================================= -->
						<div class="sidebar col-lg-3">

							<address>
								<strong>Location:</strong><br>
								19, Alhaji Adedeji Avenue,<br>
								Eleyele Ibadan, Oyo state.
							</address>
							<abbr title="Phone Number"><strong>Phone:</strong></abbr>+2347038241745, +2348055135819<br>
							 <abbr title="Email Address"><strong>Email:</strong></abbr>admin@srg.firat.com.ng 

							

							

						</div><!-- .sidebar end -->
					</div>

				</div>
			</div>
		</section><!-- #content end -->



<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
<script type="text/javascript">
  
  $(document).ready(function(){

var _tokens = $('input[name=_token]').val();



function validateEmail(email) 
    {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
    }


$('#mail_btn').click(function(event){

event.preventDefault();

  var name = $('#name').val();
  var phone = $('#phone').val();
  var email = $('#email').val();
  var subject = $('#subject').val();
  var message = $('#message').val();
  
  if (name == '') {

alert("Name field is Required");
  }else if (phone == '') {
alert("Phone Number field is Required");

  }else if (email == '') {

alert("Email field is Required");
  }else if (validateEmail(email) == false) {

 alert("Invalid Email Address");

  }else if (subject == '') {

alert("Subject field is Required");
  }else if (message == '') {

alert("Message field is Required");
  }else{

$('#status').html('<i>Sending.....</i>');

    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},        
        url:"{{route('contactus')}}",
        method:"POST",
        data:{name:name,phone:phone,email:email,subject:subject,message:message,_tokens:_tokens},
        success:function(data){

    //console.log(data);

    if (data == 'success') {
      alert('Sent Successfully');

  $('#name').val('');
  $('#phone').val('');
$('#email').val('');
$('#subject').val('');
  $('#message').val('');
$('#status').html('<b>Sent</b>');
    }else{

      alert(data);

    }

          }
        
         })




  }
  


});




  });

</script>


@endsection