@extends('AdminLayouts.app')
@section('content')

 <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
   		

   <!-- start page title -->
   <div class="row">
       <div class="col-12">
           <div class="page-title-box d-flex align-items-center justify-content-between">
               <h4 class="mb-0 font-size-18">Payments</h4>

               <div class="page-title-right">
                   <ol class="breadcrumb m-0">
                       <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                       <li class="breadcrumb-item active">Payments</li>
                   </ol>
               </div>

           </div>
       </div>
   </div>
   <!-- end page title -->
 @include('AdminInc.message')


 







                   
  <div class="row">
  <div class="col-lg-12">
      <div class="card shadow">
          <div class="card-body" style="background: #fff;">
          
            





<div class="table-responsive">
  <table class="table table-centered table-nowrap table-hover table-stripped" id="$payments_datatable">
                                                <thead>
                                                    <tr style="background: teal; color: #fff;">
                                                        <th>#</th>
                                                         <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Plan</th>
                                                       <th>Created At</th>
                                                    </tr>
                                                </thead>
                                                <tfoot style="background: teal; color: #fff;">
                                                <th>#</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Plan</th>
                                                       <th>Created At</th>
                                                </tfoot>
                                                <tbody>

                                                    <?php $no = 1;?>
                                                    
                                                   @foreach($payments as $payment)

                                                    <tr>
                                                        <td>{{$no}}</td>
                                                        <td>{{$payment->pFname}} {{$payment->pLname}}</td>
                                                        <td>{{$payment->pEmail}}</td>
                                                        <td>{{$payment->plan}}</td>
                                                        <td>{{$payment->created_at}}</td>

                                                       
                                                    </tr>

                                                    <?php $no++;?>
                                                    @endforeach
                                                </tbody>

                                            </table>
                                        </div>







    
              
              
              </div>
               <!-- end card -->
                            </div>
                        </div>
                        <!-- end row -->




































</div>
</div>
</div>

<script src="{{asset('js/app.js')}}"></script>

<script type="text/javascript">
 $(document).ready(function(){
var _tokens = $('input[name=_token]').val();

$('#$payments_datatable').DataTable();






      });

</script>
                        

                       


			


@endsection