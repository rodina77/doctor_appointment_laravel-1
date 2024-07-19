<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    public function services(){
        $services= DB::select("select * from services");
        return view('services',compact('services'));
    }
    public function serviceDashboard(){
        $services= DB::select("select * from services");
        return view('serviceDashboard', compact('services'));
    }
    public function Add_service(){
        return view('add_service');
    }

    public function Handle_Add_service (Request $request){
        $service_name=$request->service_name;
        $service_code=$request->service_code;
        $service_type=$request->service_type;
        $cost=$request->cost;
        $additional_info= $request->additional_info;
        $image=$request->image;
        $validator = Validator::make($request->all(), [
            'service_name' => 'required|string|min:3|regex:/^[a-zA-Z-\' ]*$/',
            'service_code' => 'required|digits:4|unique:services,code',
            'service_type' => 'required',
            'additional_info' => 'required',
            'cost' => 'required',
            'image' => 'required',

        ], [
            'service_name.required' => 'Service name is required',
            'service_name.string' => 'Service name must be a string',
            'service_name.min' => 'Service name must be at least 3 characters',
            'service_name.regex' => 'Service name can only contain letters, hyphens, and spaces',
    

            'service_code.required' => 'Code is required',
            'service_code.digits' => 'Invalid code number. Please enter a 4-digit code number.',
            'service_code.unique' => 'Code already exists',


            'service_type.required' => 'Service_type is required',

            'additional_info.required'  => 'Additional_info is required',

            'cost.required' => 'Cost is required',

            'image.required' => 'Image is required',
 
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $extensio=$file->getClientOriginalExtension();
            $file_name= time().'.'.$extensio;
            $file->move('img/services/',$file_name);
            $image=$file_name;
        }
        else{
            return $request;
            $image='';
        }
        DB::insert("insert into services (service_name, service_code,  service_type, cost, additional_info,image) 
        values (?,?,?,?,?,?)",[ $service_name, $service_code, $service_type,$cost,$additional_info,$image]);

        return redirect(route('serviceDashboard')); 
       
        
    }

    public function Update_Service($id){
        $service =DB::select("select * from services where id=?",[$id])[0];
        return view('update_service', compact('service'));
    }

    public function Handle_Update_Service(Request $request, $id){
        $service_name=$request->service_name;
        $service_code=$request->service_code;
        $service_type=$request->service_type;
        $cost=$request->cost;

        $additional_info= $request->additional_info;
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $extensio=$file->getClientOriginalExtension();
            $file_name= time().'.'.$extensio;
            $file->move('img/services/',$file_name);
            $image=$file_name;
        }

        DB::update("update services set service_name=? , service_code=?, service_type=?, cost=?,image=? ,additional_info=? where id=?",
        [$service_name,$service_code,$service_type,$cost, $image, $additional_info ,$id]);

        return redirect(route('serviceDashboard', ['id'=>$id]));

       
    }
    public function Delete_Service($id){
        DB::delete("delete from services where id =?",[$id]);
        return redirect(route('serviceDashboard'));
   
    } 
    public function Search_service(Request $request){
        $service_name=$request->service_name;
        $service_code=$request->service_code;

        $services=DB::select("select * from services where 
        (:service_name is null or service_name like :service_name)
        and (:service_code is null or service_code like :service_code)
        ",[
            'service_name'=>"%$service_name%",
            'service_code'=>"%$service_code%",

            ]
    );

    return view('serviceDashboard',['services'=>$services]);

    }


    public function Search_service_for_patient(Request $request){
        $service_name=$request->service_name;
       

        $services=DB::select("select * from services where 
        (:service_name is null or service_name like :service_name)
        ",[
            'service_name'=>"%$service_name%",

            ]
    );

    return view('services',['services'=>$services]);

    }
}
