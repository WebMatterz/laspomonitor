<!DOCTYPE html>
<html lang="en">

<head>
        
        <meta charset="utf-8" />
        <title>{{ config('app.name', 'LASPO MONITOR') }} | {{$title}}</title>
                  <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="{{ config('app.name', 'LASPO MONITOR') }} | {{$title}}" name="{{$title}}" />
       
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

  
         <link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

          
      

      <link rel="stylesheet" type="text/css" href="{{asset('css/progress.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('css/overlay.css')}}">
      <link rel="stylesheet" type="text/css" href="{{ asset('DataTables/datatables.min.css') }}">
      <link href="{{ asset('assets/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />

      <!-- Bootstrap Css -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
        <style type="text/css">
          body{
            font-family: Arial !important;

          }

          .card.one, .card.two, .card.three {
  background-color: teal;
  margin: 0px 20px 50px;
}

h5.card-title > i {
  background-color: rgba(255, 155, 68, 0.2);
border-radius: 100%;
color: #ff9b44;
display: inline-block;
float: left;
font-size: 30px;
height: 60px;
line-height: 60px;
margin-right: 20px;
text-align: center;
width: 60px;
}


h5.card-title {
    color: white;
    font-family: agency fb;
    font-weight: bold;
    font-size: 1.4em;
    margin-bottom: 0.2em;
    padding: 0.5em;
}

h6.card-text {
    color: white;
    font-family: agency fb;
    font-weight: bold;
    font-size: 1.7em;
}

        </style>
    </head>

    <body data-sidebar="dark">

 <!-- Begin page -->
<div id="layout-wrapper">

@include('AdminInc.header')
@include('AdminInc.sider')
<div class="overlays"><div class="loaders"></div></div>
     @yield('content')

@include('AdminInc.footer')
</div>





      <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

        <!-- apexcharts -->
    <!--     <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script> -->

         <script src="{{asset('assets/libs/select2/js/select2.min.js')}}"></script>
        <script src="{{asset('js/moment.js')}}"></script>
       

       <!--  <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script> -->
        
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
       <script src="{{ asset('DataTables/datatables.js') }}" defer ></script>
        <!-- App js -->
          <script src="{{ asset('assets/js/pages/form-advanced.init.js') }}"></script>
         <!--     <script src="{{ asset('assets/js/pages/sweet-alerts.init.js') }}"></script> -->
<!--         <script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script> -->
        <script src="{{ asset('assets/js/app.js') }}"></script>
    </body>




</html>
