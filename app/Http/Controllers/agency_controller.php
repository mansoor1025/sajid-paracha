<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class agency_controller extends Controller
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
    public function view_agency_name()
    {
        $view_agency_name = DB::table('users')->where([['agency_name','!=','']]);    
        $city_name = DB::table('api_cities')->where('status',1)->get();    
        return view('dashboard.view_agency_name',compact('view_agency_name','city_name'));
    }

    public function edit_agency_rate(Request $request)
    {
        $edit_agency_rate = DB::table('users')->where([['id',$request->id]])->first();    
        return json_encode($edit_agency_rate);
    }

     public function update_agency_rate(Request $request)
    {
        $data['rate'] = $request->rate;
        DB::table('users')->where([['id',$request->edit_id]])->update($data);    
        echo 'done';
    }

    public function add_agency_form(Request $request){
        if($request->logo != ''){
            $logo = time().'.'.$request->logo->extension();  
            $location= $request->logo->move(public_path('logo_images'), $logo);
            $data['logo'] = $logo;
        }
        
            $data['name'] = $request->name;
            $data['last_name'] = $request->last_name;
            $data['agency_name'] = $request->agency_name;
            $data['arabic_agency_name'] = $request->arabic_agency_name;
            $data['lisence_no'] = $request->lisence_no;
            $data['city_id'] = $request->city_id;
            $data['phone_number'] = $request->phone_number;
            $data['address'] = $request->address;
            $data['email'] = $request->email;
            $data['rate'] = $request->rate;
            $data['created_at'] = date('y-m-d');
            DB::table('users')->insert($data);
            echo 'done';    
        }
        
    public function edit_agency(Request $request){
        $edit_agency = DB::table('users')->where('id',$request->id)->first();
        $city_name = DB::table('api_cities')->where('status',1)->get();  
        return view('dashboard.edit_agency',compact('edit_agency','city_name'));
    }    
    
    public function barcode_generator(){
        return view('barcode_generator');
    }
}
