
@extends('home')
@section('content')
<div class="row">
         <form id="add-master-form">
            {{csrf_field()}}
          <div class="col-md-12">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Visa Application</h3>
              </div>
             
              <div class="card-body">
               <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Medical Center:</label>
                      <select name="medical_center" id="medical_center" class="form-control" onchange="get_medical_code(this.value)">
                        <option value="">Select Medical Center</option>
                        @foreach($medical_data as $value)
                         <option value="{{$value->medical_name}}">{{$value->medical_name}}</option>
                        @endforeach
                      </select>
                    </div>   
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Code No:</label>
                      <input type="text" class="form-control" name="code_no" id="code_no" placeholder="Enter Code No" disabled>
                    </div>   
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Date:</label>
                      <input type="date" class="form-control" name="visa_date" id="visa_date">
                    </div>   
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Visa No: *</label>
                      <input type="number" class="form-control dynamic_visa_no" name="visa_no" id="visa_no" required placeholder="Enter Visa No" onchange="check_passport_no();auto_fill_dynamic(this.value,'dynamic_visa_no')">
                    </div>   
                  </div>
               </div> 
                

               <div class="row">
                   
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Passport No *:</label>
                      <input type="text" class="form-control dynamic_passport_no" name="passport_no" id="passport_no" placeholder="Enter Passport No" onchange="check_passport_no();auto_fill_dynamic(this.value,'dynamic_passport_no')">
                    </div>   
                  </div>
                  
                   
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Sponcers ID: *</label>
                      <input type="text" class="form-control dynamic_sponcers_no" name="sponcers_no" id="sponcers_no" placeholder="Enter Sponcers NO" required onchange="auto_fill_dynamic(this.value,'dynamic_sponcers_no')">
                    </div>   
                  </div>
                  
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Sponsors Name M/S:</label>
                      <input type="text" class="form-control dynamic_sponcers_name_ms" name="sponcers_name_ms" id="sponcers_name_ms" placeholder="Enter Sponsors Name M/S" onchange="auto_fill_dynamic(this.value,'dynamic_sponcers_name_ms')">
                    </div>   
                  </div>
                  
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Address Of Sponsors : </label>
                      <select name="address_of_sponsors" id="address_of_sponsors" class="form-control" onchange="address_change(this.value)">
                          <option value="">Select Address</option>
                          <option value="Jeddah">Jeddah</option>
                          <option value="Makkah">Makkah</option>
                          <option value="Madina Munawara">Madina Munawara</option>
                          <option value="Riyadh">Riyadh</option>
                          <option value="Dammam">Dammam</option>
                      </select>
                      
                    </div>   
                  </div>
                  
               </div> 
               
               <div class="row">
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>E Number *:</label>
                      <input type="text" class="form-control dynamic_e_number" name="e_number" id="e_number" placeholder="Enter E Number" required onchange="check_passport_no();auto_fill_dynamic(this.value,'dynamic_e_number')">
                    </div>   
                  </div>
                  
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Agency Name *:</label>
                      <select name="agency_id" id="agency_id" class="form-control" required>
                          <option value="">Select Agency Name</option>
                          @foreach($agency_name as $value)
                          <option value="{{$value->id}}">{{$value->agency_name}}</option>
                          @endforeach
                      </select>
                    </div>   
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Name In Full *:</label>
                      <input type="text" class="form-control" name="name_full" id="name_full" required placeholder="Enter Name In Full">
                    </div>   
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Father Name: *</label>
                      <input type="text" class="form-control" name="father_name" id="father_name" required placeholder="Enter Father Name">
                    </div>   
                  </div>
               </div>
                  
               <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Husband Name: </label>
                      <input type="text" class="form-control" name="husband_name" id="husband_name" placeholder="Husband Name">
                    </div>   
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Name OF Mahram :</label>
                      <input type="text" class="form-control" name="mahram_name" id="mahram_name" placeholder="Enter Name OF Mahram" >
                    </div>   
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Relationship:</label>
                      <input type="text" class="form-control" name="relationship" id="relationship" placeholder="Enter Relationship">
                    </div>   
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Place & Date OF Birth:</label>
                      <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" onchange="calculate_age(this.value)">
                    </div>   
                  </div>
               </div>

                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Religion: </label>
                      <select name="religion" id="religion" class="form-control">
                          <option value="">Select Religion</option>
                          <option value="Muslim">Muslim</option>
                          <option value="Non Muslim">Non Muslim</option>
                      </select>
                      
                    </div>   
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Martial Status :</label>
                      <input type="text" class="form-control" name="martial_status" id="martial_status" placeholder="Enter Martial Status" >
                    </div>   
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Nationality:</label>
                      <input type="text" class="form-control" name="nationality" id="nationality" placeholder="Enter Nationality">
                    </div>   
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Date Of Issue:</label>
                      <input type="date" class="form-control" name="date_of_issue" id="date_of_issue">
                    </div>   
                  </div>
               </div>

               <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Place Of Issue: </label>
                      <input type="text" class="form-control" name="place_of_issue" id="place_of_issue" placeholder="Enter Place Of Issue">
                    </div>   
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Passport Valid Upto :</label>
                      <input type="text" class="form-control" name="passport_valid_upto" id="passport_valid_upto" placeholder="Enter Passport Valid Upto" >
                    </div>   
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Permanent Address:</label>
                      <input type="text" class="form-control" name="permanent_address" id="permanent_address" placeholder="Enter Permanent Address">
                    </div>   
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>PH In Pakistan:</label>
                      <input type="number" class="form-control" name="ph_in_pakistan" id="ph_in_pakistan" placeholder="Enter PH In Pakistan">
                    </div>   
                  </div>
               </div> 

               <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Purpose Of Travel: </label>
                      <input type="text" class="form-control" name="purpose_of_travel" id="purpose_of_travel" placeholder="Enter Purpose Of Travel" value="Work">
                    </div>   
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Port Of Entry :</label>
                      <input type="text" class="form-control" name="port_of_entry" id="port_of_entry" placeholder="Enter Port Of Entry" >
                    </div>   
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Lenght Of Stay In S.A:</label>
                      <input type="text" class="form-control" name="length_of_stay_sa" id="length_of_stay_sa" placeholder="Enter Lenght Of Stay In S.A">
                    </div>   
                  </div>

                 
               </div>

                
              </div>

              <!-- /.card-body -->
            </div>
            
            
                       <!--  permission & protector session -->
           <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Detail In Arabic</h3>
              </div>
              <div class="card-body">
               <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Name In Arabic:</label>
                      <input type="text" class="form-control" name="arabic_name" id="arabic_name" placeholder="Enter Name In Arabic">
                    </div>   
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Father Name In Arabic:</label>
                      <input type="text" class="form-control" name="father_name_arabic" id="father_name_arabic" placeholder="Enter Father Name In Arabic">
                    </div>   
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Occupation In Arabic:</label>
                      <input type="text" class="form-control" name="occupation_in_arabic" id="occupation_in_arabic" placeholder="Enter Occupation In Arabic">
                    </div>   
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Age In Arabic :</label>
                      <input type="text" class="form-control" name="age_in_arabic" id="age_in_arabic"  >
                    </div>   
                  </div>
               </div> 
                

               <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Sponsors Name M/S: </label>
                      <input type="text" class="form-control" name="emp_in_arabic" id="emp_in_arabic" placeholder="Enter Employer In Arabic">
                    </div>   
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Visa No Arabic:</label>
                      <input type="text" class="form-control dynamic_visa_no" name="visa_no_arabic" id="visa_no_arabic" placeholder="Enter Visa No Arabic" onchange="auto_fill_dynamic(this.value,'dynamic_visa_no')">
                    </div>   
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Sponcers ID:</label>
                      <input type="text" class="form-control dynamic_sponcers_no" name="visa_id_arabic" id="visa_id_arabic" placeholder="Enter Visa ID Arabic" onchange="auto_fill_dynamic(this.value,'dynamic_sponcers_no')">
                    </div>   
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Visa Date Arabic: </label>
                      <input type="text" class="form-control" name="visa_date_arabic" id="visa_date_arabic"  placeholder="Enter Visa Date Arabic">
                    </div>   
                  </div>
               </div> 
                  
               <div class="row">
                   
                  
                   
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Employer phone :</label>
                      <input type="text" class="form-control" name="employer_phone" id="employer_phone" placeholder="Enter Employer phone" >
                    </div>   
                  </div>
                  
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Address Of Sponsors :</label>
                      <input type="text" class="form-control" name="sponsers_address_arabic" id="sponsers_address_arabic" placeholder="Enter Address Of Sponsors">
                    </div>   
                  </div>
               </div>
              <!-- /.card-body -->
            </div>



           <!--  permission & protector session -->
           <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Permission & Protector</h3>
              </div>
              <div class="card-body">
               <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Permission No:</label>
                      <input type="number" class="form-control" name="permission_number" id="permission_number" placeholder="Enter Permission No">
                    </div>   
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Challan Amount In Words:</label>
                      <textarea id="challan_amount_in_words" name="challan_amount_in_words" rows="4" cols="50" class="form-control" placeholder="Enter Challan Amount In Words"></textarea>
                    </div>   
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Father Nic:</label>
                      <input type="number" class="form-control" name="father_nic" id="father_nic" placeholder="Enter Father Nic">
                    </div>   
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Permission Date :</label>
                      <input type="date" class="form-control" name="permission_date" id="permission_date" >
                    </div>   
                  </div>
               </div> 
                

               <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Next To Kin: </label>
                      <input type="text" class="form-control" name="next_to_kin" id="next_to_kin" placeholder="Enter Next To Kin">
                    </div>   
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Challan Amount:</label>
                      <input type="number" class="form-control" name="challan_amount" id="challan_amount" placeholder="Enter Challan Amount">
                    </div>   
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Relation:</label>
                      <input type="text" class="form-control" name="permission_relation" id="permission_relation" placeholder="Enter Relation">
                    </div>   
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Nic Next To Kin: </label>
                      <input type="text" class="form-control" name="nic_next_to_kin" id="nic_next_to_kin"  placeholder="Enter Nic Next To Kin">
                    </div>   
                  </div>
               </div> 
                  
               <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Address Next: </label>
                      <input type="text" class="form-control" name="address_next" id="address_next" placeholder="Enter Address Next">
                    </div>   
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Salary :</label>
                      <input type="number" class="form-control" name="salary" id="salary" placeholder="Enter Salary" >
                    </div>   
                  </div>
               </div>
              <!-- /.card-body -->
            </div>

            <!-- care of session -->

                       <!--  permission & protector session -->
           <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Care OF</h3>
              </div>
              <div class="card-body">
               <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Care Of:</label>
                      <input type="number" class="form-control" name="care_of" id="care_of_passport_no" placeholder="Enter Care Of">
                    </div>   
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Passport No:</label>
                      <input type="number" class="form-control dynamic_passport_no" name="care_passport_no" id="care_passport_no" placeholder="Enter Passport No" onchange="auto_fill_dynamic(this.value,'dynamic_passport_no')">
                    </div>   
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>E Number:</label>
                      <input type="text" class="form-control dynamic_e_number" name="care_e_number" id="care_e_number" placeholder="Enter E Number" onchange="auto_fill_dynamic(this.value,'dynamic_e_number')">
                    </div>   
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Visa No :</label>
                      <input type="number" class="form-control dynamic_visa_no" name="care_visa_no" id="care_visa_no"  placeholder="Enter Visa No" onchange="auto_fill_dynamic(this.value,'dynamic_visa_no')">
                    </div>    
                  </div>
               </div> 
                

               <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Sponcers ID: </label>
                      <input type="text" class="form-control dynamic_sponcers_no" name="id_number" id="id_number" placeholder="Enter ID Number" onchange="auto_fill_dynamic(this.value,'dynamic_sponcers_no')">
                    </div>   
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Sponsors Name M/S:</label>
                      <input type="text" class="form-control dynamic_sponcers_name_ms" name="kafeel_name" id="kafeel_name" placeholder="Enter Kafeel Name" onchange="auto_fill_dynamic(this.value,'dynamic_sponcers_name_ms')">
                    </div>   
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <button type="submit" name="submit" id="save" class="btn btn-primary" style="margin-top: 33px;">Submit</button>   
                  </div>
               </div>   
                  
               
              <!-- /.card-body -->
            </div>

           </div>
          </div>  
        </div>
        </form>
       </div> 
<script type="text/javascript">
  $("#add-master-form").submit(function(e){
    e.preventDefault();
    $('#save').prop('disabled', true);
    $.ajax({
      type:'POST', 
      url:'<?php echo url('/') ?>/add-master-form', 
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
        alert('Visa Application Form Add Successfully')
          $('#add-master-form')[0].reset();
          $('#save').prop('disabled', false);
        }
      }   
    });
  });
  
  
  
  function calculate_age(birthday)
   { 
        var res = birthday.split("-");
        var birth_month = res[1];
        var birth_year = res[0];
        var birth_day =  res[2];
         
        today_date = new Date();
        today_year = today_date.getFullYear();
        today_month = today_date.getMonth();
        today_day = today_date.getDate();
        age = today_year - birth_year;
    
        if ( today_month < (birth_month - 1))
        {
            age--;
        }
        if (((birth_month - 1) == today_month) && (today_day < birth_day))
        {
            age--;
        }
        $("#age_in_arabic").val(age);
    }
    
   function check_passport_no(){
       var passport_no = $("#passport_no").val();
       var visa_no = $("#visa_no").val();
       var e_number = $("#e_number").val();
       if(passport_no != '' && visa_no != '' && e_number != ''){
           $.ajax({
           type:'GET',
           url:'<?php echo url('/') ?>/check-passport-no',
           data:{passport_no:passport_no,visa_no:visa_no,e_number:e_number},
           success:function(res){
               if(res == 'exists'){
                   alert('Passport No Already Exists');
                   $("#passport_no").val('');
                   $('#save').prop('disabled', true);
               }
               else{
                   $('#save').prop('disabled', false);
               }
             }
            })
       }
       
   } 
   
   function auto_fill_dynamic(value,dynamic_class){
       $("."+dynamic_class).val(value);
       
   }
   
   function address_change(value){
       var arabic_value = '';
       if(value != ''){
           if(value == 'Jeddah'){
               arabic_value = 'جدة'
           }
           else if(value == 'Makkah'){
               arabic_value = 'مكه مكرمه'
           }
           else if(value == 'Madina Munawara'){
               arabic_value = 'مدينة منورة'
           }
           else if(value == 'Riyadh'){
               arabic_value = 'الرياض '
           }
           else if(value == 'Dammam'){
               arabic_value = 'الدمام'
           }
           
           $("#sponsers_address_arabic").val(arabic_value)
           $("#port_of_entry").val(value);
          
       }
   }

   function get_medical_code(value){
      if(value != ''){
        $.ajax({
          type:'GET',
          url:'<?php echo url('/') ?>/get-medical-code',
          data:{value:value},
          success:function(res){
            $("#code_no").val(res);
          }
        });  
      }
      else{
        $("#code_no").val('');
      }
   }
</script>       
@endsection            