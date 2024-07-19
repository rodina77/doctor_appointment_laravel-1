<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class StaffController extends Controller
{
    public function staff_login(){
        return view('receptionest_login');
    }

    public function handleLoginStaff(Request $request)
    {
        $email =$request->email;
        $password=$request->password;

        // search user from database
        $result= DB::select(
            "select * from staff where email=? and password=?",
            [$email,$password]
        );

        //if user not found
        if(empty($result))
        {
            return back()->with('error' , 'Wrong email or password')->withInput();
        }

        //otherwise get user
        $staff=$result[0];

        // make session ad save data 

        session()->regenerate();
        session(['staff'=>$staff]);
        return to_route('dashboard');

    }

    public function handleLogoutStaff()
    {
         session()->invalidate();
          return to_route('welcome');
 
    }
    public function addStaff(){
        return view('add_staff');
    }
    public function staffDashboard(){
        $staff= DB::select("select * from staff");
        return view('staffDashboard', compact('staff'));
    }


    public function Handle_addStaff (Request $request){
        $fname=$request->fname;
        $lname=$request->lname;
        $address=$request->address;
        $national_id=$request->national_id;
        $email=$request->email;
        $phone=$request->phone;
        $password=$request->password;
        $shift_time=$request->shift_time;
        $sallary=$request->sallary;
        $staff_type=$request->staff_type;
        $additional_info=$request->additional_info;

        $validator = Validator::make($request->all(), [
            'fname' => 'required|string|min:3|regex:/^[a-zA-Z-\' ]*$/',
            'lname' => 'required|string|min:3|regex:/^[a-zA-Z-\' ]*$/',
            'phone' => 'required|digits:11',
            'password' => 'required|digits:8',
            'email' => 'required|email|unique:staff,email',
            'national_id' => 'required|digits:14|unique:staff,national_id',
            'sallary' => 'required',
            'additional_info' => 'required',
            'address' => 'required',
            'shift_time' => 'required',
            'staff_type' => 'required|in:receptionest,nurse'
            

        ], [
            'fname.required' => 'First name is required',
            'fname.string' => 'First name must be a string',
            'fname.min' => 'First name must be at least 3 characters',
            'fname.regex' => 'First name can only contain letters, hyphens, and spaces',
    
            'lname.required' => 'Last name is required',
            'lname.string' => 'Last name must be a string',
            'lname.min' => 'Last name must be at least 3 characters',
            'lname.regex' => 'Last name can only contain letters, hyphens, and spaces',
    
            'phone.required' => 'Phone number is required',
            'phone.digits' => 'Invalid phone number. Please enter 11-digit phone number',
    
            'email.required' => 'Email is required',
            'email.email' => 'Invalid email format',
            'email.unique' => 'Email already exists',
    
            'national_id.required' => 'National ID is required',
            'national_id.digits' => 'Invalid national number. Please enter a 14-digit national number.',
            'national_id.unique' => 'National ID already exists',

            'password.required' => 'Password is required',
            'password.digits' => 'Invalid password number. Please enter a 8-digit password number.',
          


            'address.required' => 'Address is required',

            'additional_info.required'  => 'Additional_info is required',

            'sallary.required' => 'Sallary is required',

            'shift_time.required'  => 'Shift_time is required',

            'staff_type.required'  => 'Staff_type is required',
           
 
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        DB::insert("insert into staff (fname, lname, address, national_id, email,phone, password, shift_time, sallary,staff_type, additional_info) 
        values (?,?,?,?,?,?,?,?,?,?,?)",[$fname,$lname,$address,$national_id, $email, $phone, $password, $shift_time, $sallary,$staff_type,$additional_info]);

        return redirect(route('staffDashboard')); 

    }

    public function UpdateStaff($id){
        $staff =DB::select("select * from staff where id=?",[$id])[0];
        return view('update_staff', compact('staff'));
    }

    public function HandleUpdateStaff(Request $request, $id){
        $fname=$request->fname;
        $lname=$request->lname;
        $address=$request->address;
        $national_id=$request->national_id;
        $email=$request->email;
        $phone=$request->phone;
        $password=$request->password;
        $shift_time=$request->shift_time;
        $sallary=$request->sallary;
        $additional_info=$request->additional_info;
       
       


        DB::update("update staff set fname=? , lname=?, address=?, national_id=? ,email=? ,phone=? ,password=? ,shift_time=? ,sallary=? ,additional_info=? where id=?",
        [$fname,$lname,$address,$national_id,$email,$phone,$password,$shift_time, $sallary,$additional_info , $id]);

        return redirect(route('staffDashboard', ['id'=>$id]));

       
    }


    public function Delete_Staff($id){
        DB::delete("delete from staff where id =?",[$id]);
        return redirect(route('staffDashboard'));
   
    } 
}
