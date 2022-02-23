@extends('AdminLayouts.app')
@section('content')

 <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
   		

   <!-- start page title -->
   <div class="row">
       <div class="col-12">
           <div class="page-title-box d-flex align-items-center justify-content-between">
               <h4 class="mb-0 font-size-18">Task</h4>

               <div class="page-title-right">
                   <ol class="breadcrumb m-0">
                       <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                       <li class="breadcrumb-item active">Assign Task</li>
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
          
            
          <form id="taskForm"  class="mb-0" method="POST" action="{{route('task.store')}}">
                                {{ csrf_field() }}

                                    <h3>Assign Supervisor to the Lecturer</h3>

                                    <div class="row">
                                        
                                    <div class="col-3 form-group">
                                            <label for="last-name">Supervisor name:</label>
                                            <input type="text" class="form-control" id="supervisorName" name="supervisorName" placeholder="Supervisor Name" value=""/>
                                            <div id="supervisorList"></div>
                                        </div>
                                        {{ csrf_field() }}
                                        
                                        <div class="col-3 form-group">
                                            
                                <label for="first-name">Lecturer Name:</label>
                                        <select name="lecturerName" id="lecturerName" class="form-control">
                                                        <option value="">--- Select Lecturer ---</option>
                                                        @foreach ($lecturers as $lecturer)
                                                            <option value="{{ $lecturer->lecturerFname }} {{ $lecturer->lecturerLname }}">{{ $lecturer->lecturerFname }} {{ $lecturer->lecturerLname }}</option>">
                                                        @endforeach
                                                    </select>
                                         </div>

                             
                                        <div class="col-3 form-group" id="datetimepicker">
                                            <label for="member-form-plan">Assigned Date:</label>
                                            <input type="date" class="form-control" id="assignedDate" name="assignedDate" value=""/>
                            
                                        </div>
                                        
                                        <div class="col-3 form-group form-submit" style="margin-top:2em;">
                                            <button class="button button-3d button-black m-0 btn btn-md text-white" style="background-color:teal;" type="submit">Assign</button>
                                            
                                        </div>
                                    </div>

                                </form>

       
              
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

$(document).ready(function() {
    $('#supervisorName').keyup(function(){
        var query = $(this).val();
        if(query != '') {
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url:"{{ route('autocomplete.fetch') }}",
                method:"POST",
                data:{query:query, _token:_token},
                success:function(data) {
                    $('#supervisorList').fadeIn();
                    $('#supervisorList').html(data);
                }
            });
        }
    });
    $(document).on('click', 'li', function(){
        $('#supervisorName').val($(this).text());
        $('#supervisorList').fadeOut();
    });
});

 $(document).ready(function(){
var _tokens = $('input[name=_token]').val();

$('#users_datatable').DataTable();

  });



      

</script>

                        

                       


			


@endsection