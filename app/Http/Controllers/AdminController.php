<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function login_Admin(){
        return view('admin_login');
    }
   public function handleLoginAdmin(Request $request)
   {
        $email =$request->email;
        $password=$request->password;

        // search user from database
        $result= DB::select(
            "select * from admin where email=? and password=?",
            [$email,$password]
        );

        //if user not found
        if(empty($result))
        {
            return back()->with('error' , 'Wrong email or password')->withInput();
        }

        //otherwise get user
        $admin=$result[0];

        // make session ad save data 

        session()->regenerate();
        session(['admin'=>$admin]);
        return to_route('staffDashboard');

   }
   public function handleLogoutAdmin()
   {
        session()->invalidate();
         return to_route('welcome');
   }
}
