@extends('home')
@section('content')

<section class="content">
      <div class="container-fluid">
        <div class="row"> 
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">View Medical List</h3>
                <div class="col-4">
                    <button type="button" name="add_medical_form" id="add_medical_form" class="btn btn-primary" style="float: right;">Add Medical</button>
                </div> 
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                  	<th>S.no</th>
                    <th>Code No</th>
                    <th>Medical Name</th>
                    <th>Created At</th>
                    <th>Action</th>
                  </tr>
                  
                  </thead>
                  <tbody>
                    <?php $count = 0; ?> 
                  	@foreach($medical_data->orderBy('id','desc')->get() as $value)
                    <?php $count++; ?>  
                      <tr>  
                        <td>{{$count}}</td>
                        <td>{{$value->medical_code}}</td>
                        <td>{{$value->medical_name}}</td>
                        <td>{{date("d-m-Y", strtotime($value->created_at))}}</td>
                        <td>
                          <i class="fas fa-edit" onclick="edit_medical({{$value->id}})"></i>
                          @if($value->status == 1)
                          <i class="fas fa-trash" onclick="delete_medical_item({{$value->id}})"></i>
                          @else
                          <i class="fa fa-window-restore" onclick="delete_medical_item({{$value->id}})"></i>
                          @endif
                          
                          
                       </td>
                      </tr>
                    @endforeach
                  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modal-lg">
    <form id="medical_form">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Medical Form</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
             
               {{csrf_field()}}
               <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-4">
                    <div class="form-group">
                      <label>Medical Code</label>
                      <input type="text" name="medical_code" id="medical_code" class="form-control" required>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-4">
                    <div class="form-group">
                      <label>Medical Name</label>
                      <input type="text" name="medical_name" id="medical_name" class="form-control" required>
                    </div>
                  </div>
               </div>
             
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="submit" id="submit" class="btn btn-success">Submit</button>
                    </div>
            </div>
          </div>
          </form> 
          <!-- /.modal-content -->
        </div>
         
        <!-- /.modal-dialog -->
      </div>




       <!--  edit medical form -->
      <div class="modal fade" id="edit-medical-modal">
       <form id="update_medical_form">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Medical Form</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
             
               {{csrf_field()}}
                 <div class="row">
                    <input type="hidden" name="medical_id" id="medical_id" value="">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-4">
                      <div class="form-group">
                        <label>Medical Code</label>
                        <input type="text" name="medical_code" id="edit_medical_code" class="form-control" required>
                      </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-4">
                      <div class="form-group">
                        <label>Medical Name</label>
                        <input type="text" name="medical_name" id="edit_medical_name" class="form-control" required>
                      </div>
                    </div>
                 </div>
             
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="submit" id="update_submit" class="btn btn-success">Submit</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        </form>
        <!-- /.modal-dialog -->
      </div>
</section>
<script type="text/javascript">
	$(function () {
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

  $("#add_medical_form").click(function(){
    $("#modal-lg").modal('show');
  });

  $("#medical_form").submit(function(e){
    e.preventDefault();
    $('#submit').prop('disabled', true);
    $.ajax({
      type:'POST', 
      url:'<?php echo url('/') ?>/add-medical-form', 
      data:new FormData(this),
      contentType:false,
      cache:false,
      processData:false,
      success:function(res){ 
        if(res == 'done'){
        //   Toast.fire({
        //      icon: 'success',
        //      title: 'Visa Application Form Add Successfully'
        //   })
          alert('Medical Form Add Successfully')
          $('#medical_form')[0].reset();
          $('#submit').prop('disabled', false);
          location.reload();
        }
      }   
  });
   });  

   function edit_medical(id){
    $.ajax({
        type:'GET',
        url:'<?php echo url('/') ?>/edit-medical',
        data:{id:id}, 
        success:function(res){
          var data = JSON.parse(res);
          $("#edit-medical-modal").modal('show');
          $("#edit_medical_name").val(data.medical_name);
          $("#edit_medical_code").val(data.medical_code);
          $("#medical_id").val(data.id);
        }
    });  
   } 


  $("#update_medical_form").submit(function(e){
    e.preventDefault();
    $('#update_submit').prop('disabled', true);
    $.ajax({
      type:'POST', 
      url:'<?php echo url('/') ?>/update-medical-form', 
      data:new FormData(this),
      contentType:false,
      cache:false,
      processData:false,
      success:function(res){ 
        if(res == 'done'){
        //   Toast.fire({
        //      icon: 'success',
        //      title: 'Visa Application Form Add Successfully'
        //   })
          alert('Medical Form Updated Successfully')
          $('#update_medical_form')[0].reset();
          $('#update_submit').prop('disabled', false);
          location.reload();
        }
      }   
  });
   });  
  

  function delete_medical_item(id){
     $.ajax({
        type:'GET',
        url:'<?php echo url('/') ?>/delete-medical-item',
        data:{id:id}, 
        success:function(res){
         if(res == 'done'){
          alert('Medical Form Delete Successfully');
          location.reload();
         }
        }
    });  
  }
</script>            
@endsection