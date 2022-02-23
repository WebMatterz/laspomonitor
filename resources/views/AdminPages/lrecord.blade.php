@extends('AdminLayouts.app')
@section('content')

 <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
   		

   <!-- start page title -->
   <div class="row">
       <div class="col-12">
           <div class="page-title-box d-flex align-items-center justify-content-between">
               <h4 class="mb-0 font-size-18">Lecturer Record</h4>

               <div class="page-title-right">
                   <ol class="breadcrumb m-0">
                       <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                       <li class="breadcrumb-item active">Records</li>
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
  <table class="table table-centered table-nowrap table-hover table-stripped" id="grants_datatable">
                                                <thead>
                                                    <tr style="background: teal; color: #fff;">
                                                        <th>#</th>
                                                         <th>Date</th>
                                                        <th>Record</th>
                                                    </tr>
                                                </thead>
                                                <tfoot style="background: teal; color: #fff;">
                                                <th>#</th>
                                                         <th>Date</th>
                                                        <th>Record</th>
                                                </tfoot>
                                                <tbody>

                                                    <?php $no = 1;?>

                                                    <tr>
                                                        <td></td>
                                                        <td> </td>

                                                       
                                                    </tr>

                                                    <?php $no++;?>
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

$('#grants_datatable').DataTable();






      });

</script>
                        

                       


			


@endsection