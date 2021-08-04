<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class master_form_controller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function view_master_form()
    {   
        $medical_data = DB::table('medical_data')->where('status',1)->get();
        $agency_name = DB::table('users')->where([['status','=',1],['agency_name','!=','']])->get();
        return view('dashboard.master_form',compact('medical_data','agency_name'));
    }

    public function add_master_form(Request $request)
    {   
    
       $data['medical_center'] = $request->medical_center;
       $data['code_no'] = $request->code_no;
       $data['visa_date'] = $request->visa_date;
       $data['visa_no'] = $request->visa_no;
       $data['sponcers_no'] = $request->sponcers_no;
       $data['e_number'] = $request->e_number;
       $data['name_full'] = $request->name_full;
       $data['father_name'] = $request->father_name;
       $data['husband_name'] = $request->husband_name;
       $data['mahram_name'] = $request->mahram_name;
       $data['relationship'] = $request->relationship;
       $data['date_of_birth'] = $request->date_of_birth;
       $data['religion'] = $request->religion;
       $data['martial_status'] = $request->martial_status;
       $data['nationality'] = $request->nationality;
       $data['date_of_issue'] = $request->date_of_issue;
       $data['place_of_issue'] = $request->place_of_issue;
       $data['passport_valid_upto'] = $request->passport_valid_upto;
       $data['permanent_address'] = $request->permanent_address;
       $data['ph_in_pakistan'] = $request->ph_in_pakistan;
       $data['purpose_of_travel'] = $request->purpose_of_travel;
       $data['port_of_entry'] = $request->port_of_entry;
       $data['length_of_stay_sa'] = $request->length_of_stay_sa;
       $data['sponcers_name_ms'] = $request->sponcers_name_ms;
       $data['address_of_sponsors'] = $request->address_of_sponsors;
       $data['passport_no'] = $request->passport_no;
       $data['agency_id'] = $request->agency_id;
       $data['created_at'] = date('y-m-d');
       $visa_app_id = DB::table('visa_application')->insertGetId($data);
       
       
       $data10['visa_app_id'] = $visa_app_id;
       $data10['arabic_name'] = $request->arabic_name;
       $data10['occupation_in_arabic'] = $request->occupation_in_arabic;
       $data10['age_in_arabic'] = $request->age_in_arabic;
       $data10['visa_no_arabic'] = $request->visa_no_arabic;
       $data10['visa_id_arabic'] = $request->visa_id_arabic;
       $data10['visa_date_arabic'] = $request->visa_date_arabic;
       $data10['employer_phone'] = $request->employer_phone;
       $data10['emp_in_arabic'] = $request->emp_in_arabic;
       $data10['sponsers_address_arabic'] = $request->sponsers_address_arabic;
       $data10['created_at'] = date('y-m-d');
       DB::table('arabia_details')->insertGetId($data10);

       $data1['visa_app_id'] = $visa_app_id;
       $data1['e_number'] = $request->e_number;
       $data1['permission_number'] = $request->permission_number;
       $data1['challan_amount_in_words'] = $request->challan_amount_in_words;
       $data1['father_nic'] = $request->father_nic;
       $data1['permission_date'] = $request->ppermission_date;
       $data1['next_to_kin'] = $request->next_to_kin;
       $data1['challan_amount'] = $request->challan_amount;
       $data1['permission_relation'] = $request->permission_relation;
       $data1['nic_next_to_kin'] = $request->nic_next_to_kin;
       $data1['address_next'] = $request->address_next;
       $data1['salary'] = $request->salary;
       $data1['created_at'] = date('y-m-d');
       $protector_id = DB::table('permission_protector')->insertGetId($data1);

       $data2['visa_app_id'] = $visa_app_id;
       $data2['protector_id'] = $protector_id;
       $data2['care_of'] = $request->care_of;
       $data2['care_passport_no'] = $request->care_passport_no;
       $data2['care_e_number'] = $request->care_e_number;
       $data2['care_visa_no'] = $request->care_visa_no;
       $data2['id_number'] = $request->id_number;
       $data2['kafeel_name'] = $request->kafeel_name;
       $data2['created_at'] = date('y-m-d');
       DB::table('care_of')->insert($data2);  
       echo 'done';
  }
  
   public function view_app_list(){ 
     $app_detail_list = DB::table('visa_application')
                          ->select('users.arabic_agency_name')  
                          ->join('users','visa_application.agency_id','=','users.id')  
                          ->where('visa_application.status',1);
                          
     return view('dashboard.view_app_list2',compact('app_detail_list'));
  }
  
  public function check_passport_no(Request $request){
        $passport_no = $request->passport_no;
        $check = DB::table('visa_application')->where([['status',1],['passport_no',$passport_no],['visa_no',$request->visa_no],['e_number',$request->e_number]]);
        if($check->exists()){
            echo 'exists';
        }
  }

  public function view_medical_form (){
        $medical_data = DB::table('medical_data')->where('status',1);

        return view('dashboard.view_medical_form',compact('medical_data'));
  }

  public function add_medical_form(Request $request){
        $data['medical_code']  = $request->medical_code;
        $data['medical_name']  = $request->medical_name;
        $data['created_at']  = date('y-m-d');
        DB::table('medical_data')->insert($data);
        echo 'done';
  }

  public function get_medical_code(Request $request){
    
    $medical_code = DB::table('medical_data')->where([['medical_name',$request->value],['status',1]])->value('medical_code');
    echo $medical_code;
  }

  public function edit_medical(Request $request){
     $medical_data =  DB::table('medical_data')->where([['id',$request->id],['status',1]])->first();
     return json_encode($medical_data);
  } 

  public function update_medical_form(Request $request){
     $data['medical_code']  = $request->medical_code;
     $data['medical_name']  = $request->medical_name;
     $data['created_at']  = date('y-m-d');
     DB::table('medical_data')->where('id',$request->medical_id)->update($data);
     echo 'done';
  }

  public function delete_medical_item(Request $request){
    $data['status'] = 0;
    DB::table('medical_data')->where('id',$request->id)->update($data);
    echo 'done';
  }
}