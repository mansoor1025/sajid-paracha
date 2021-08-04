<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class website_controller extends Controller
{
    public function service(){
    	return view('service');
    }

    public function about_us(){
    	return view('about_us');
    }

    public function news(){
    	return view('news');
    }

    public function consultant(){
    	return view('consultant');
    }

    public function contact_us(){
    	return view('contact_us');
    }

    public function login_register(){
    	$api_cities = DB::table('api_cities')->where('status',1)->get();
    	return view('login_register',compact('api_cities'));
    }

 	public function register_agency(Request $request){
    	
    	$logo_image = time().'.'.$request->logo->extension();  
        $logo_location= $request->logo->move(public_path('agency_logo'), $logo_image);
        $data['name'] = $request->name;
        $data['last_name'] = $request->last_name;
    	$data['agency_name'] = $request->agency_name;
    	$data['lisence_no'] = $request->lisence_no;
    	$data['city_id'] = $request->city_id;
    	$data['phone_number'] = $request->phone_number;
    	$data['email'] = $request->email;
    	$data['address'] = $request->address;
    	$data['password'] = $request->password;
    	$data['logo'] = $logo_image;
    	$data['created_at'] = date('y-m-d'); 
    	DB::table('users')->insert($data);
    	echo 'done';
    } 

    public function active_slider(Request $request){
    	$data['status'] = $request->status;
	    DB::table($request->table_name)->where('id',$request->id)->update($data);
	    
		if($request->status == 1){
		 $to = $request->email;   
		 $subjects = 'Agency Registration Email'; 
		 $message = 'Congrulation Agency Registered Successfully Enjoy Our Portal Services Thanks';
		 $from = 'mansoormohammadali09@gmail.com';
		 $headers = "From:" .$from;
		 mail($to,$subjects,$message,$headers);  	
		}
		echo $request->status;
			
    }
    
}
