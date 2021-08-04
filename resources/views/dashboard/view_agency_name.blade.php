@extends('home')
@section('content')

<section class="content">
      <div class="container-fluid">
        <div class="row"> 
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">View Agency List</h3>
                <div class="col-4">
                    <button type="button" name="add_medical_form" id="add_medical_form" class="btn btn-primary" style="float: right;">Add Agency</button>
                </div> 
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                  	<th>S.no</th>
                    <th>Name</th>
                    <th>Last Name</th>
                    <th>Agency Name</th>
                    <th>AR Agency</th>
                    <th>City Name</th>
                    <th>Logo</th>
                    <th>Action</th>
                  </tr>
                  
                  </thead>
                  <tbody>
                    <?php $count = 0;?>    
                    @foreach($view_agency_name->orderBy('id','desc')->get() as $value)
                    <?php $count++; ?>
                        <tr>
                            <td>{{$count}}</td>
                            <td>{{$value->name}}</td>
                            <td>{{$value->last_name}}</td>
                            <td>{{$value->agency_name}}</td>
                            <td>{{$value->arabic_agency_name}}</td>
                            <td>{{$value->city_id}}</td>
                            <td>
                            @if($value->logo != '')
                            <img src="{{asset('public/logo_images/'.$value->logo)}}" style="width: 78px;height: 78px;object-fit: cover;">
                            @else
                            <img src="{{asset('public/logo_images/no_image_found.png')}}" style="width:30px;height:30px">
                            @endif
                            
                            </td>
                            
                             <td>
                              <i class="fas fa-edit" onclick="edit_agency({{$value->id}})"></i>
                              <i class="fa fa-eye"></i>
                              <i class="fas fa-trash"></i>
                             </td> 
                          
                          
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
    <form id="agency_form">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Agency Form</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
             
               {{csrf_field()}}
               <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" name="name" id="name" class="form-control">
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Last Name</label>
                      <input type="text" name="last_name" id="last_name" class="form-control">
                    </div>
                  </div>
                  
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Agency Name</label>
                      <input type="text" name="agency_name" id="agency_name" class="form-control" required>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Arabic Agency Name</label>
                      <input type="text" name="arabic_agency_name" id="arabic_agency_name" class="form-control" required>
                    </div>
                  </div>
                </div>
                  
                <div class="row">
                   
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Liscense No</label>
                      <input type="text" name="liscense_no" id="Liscense No" class="form-control" >
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>City Name</label>
                      <select name="city_id" id="city_id" class="form-control">
                          <option value="">Select City Name</option>
                          @foreach($city_name as $value)
                          <option value="{{$value->city_name}}">{{$value->city_name}}</option>      
                          @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Logo</label>
                      <input type="file" name="logo" id="logo" class="form-control">
                    </div>
                  </div>
                  
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" name="email" id="email" class="form-control">
                    </div>
                  </div>
                  
                  
               </div>
               
               
              <div class="row">

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Rate</label>
                      <input type="text" name="rate" id="rate" class="form-control" >
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Phone Number</label>
                      <input type="text" name="phone_number" id="phone_number" class="form-control">
                    </div>
                  </div>

                  
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Address</label>
                     <textarea id="address" name="address" rows="4" cols="50" class="form-control"></textarea>
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

    
    
    
    
    <div class="modal fade" id="edit-agency-modal">
    <form id="update_agency_form">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Agency Form</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body" id="edit_form">
             
             
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="submit" id="update_submit" class="btn btn-success">Update</button>
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

  $("#agency_form").submit(function(e){
    e.preventDefault();
    $('#submit').prop('disabled', true);
    $.ajax({
      type:'POST', 
      url:'<?php echo url('/') ?>/add-agency-form', 
      data:new FormData(this),
      contentType:false,
      cache:false,
      processData:false,
      success:function(res){ 
        if(res == 'done'){
          alert('Agency Form Add Successfully')
          $('#agency_form')[0].reset();
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


  $("#update_agency_form").submit(function(e){
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
  
  
  function edit_agency(id){
       $.ajax({
        type:'GET',
        url:'<?php echo url('/') ?>/edit-agency',
        data:{id:id}, 
        success:function(res){
         $("#edit_form").html(res);
         $("#edit-agency-modal").modal('show');
        }
    });  
  }

</script>            
@endsection