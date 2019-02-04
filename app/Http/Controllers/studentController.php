<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;
use Hash;
session_start();

class studentController extends Controller
{
    //  Students dont need to register
    
    // Registration 

    // function showRegister()
    // {
    //     return view('student.register');
    // }

    // function register(Request $request)
    // {
    //     $data = array();

    //     $data['name'] = $request->name;
    //     $data['email'] = $request->email;
    //     $data['password'] = $request->password;
    //     $data['phone'] = $request->phone;


    // }

    // login page

    function login()
    {
    	return view('student.slogin');
    }

    // Login check

    function login_check(Request $request)
    {


    	$email = $request->email;
    	$password  = $request->password;

    	if(Auth::attempt(['email' => $email, 'password' => $password]))
    	{
    		return redirect('/student_dashboard');
    	}
    	else
    		return redirect('/login');

    	
    }
    // dashboard

    function dashboard()
    {
    	return view('student.dashboard');
    }

    function profile()
    {	
    	
    	$data = DB::table('students')
    	->select('*')
    	->where('email',Auth::guard('student')->user()->email)
    	->first();
        
    	return view('student.profile',['data'=>$data]);
     }

     // Profile view

    function show_update_profile()
    {
        $mail = Auth::guard('student')->user()->email;
        $data = DB::table('students')
        ->select('name','address','phone','roll')
        ->where('email',$mail)
        ->first();

        return view('student.update_profile',['info'=> $data]);
    }


    // Updating few information in DB

    function updateProcess(Request $request)
    {
        $mail = Auth::guard('student')->user()->email;

        $data = array();
        $data['name'] = $request->name;
        $data['address'] = $request->address;
        $data['phone'] = $request->phone;
        $data['roll'] = $request->roll;
        $password = $request->password;

        // Checking text password with hashed password contains in DB

        if(Hash::check($password, Auth::guard('student')->user()->password))
        {
            $success = DB::table('students')
            ->where('email',$mail)
            ->update($data);

            if($success)
            {
                Session::put('msg','Updated successfuly');
            }
            else
                Session::put('msg','Wrong password');

        }  

        return redirect('/update_profile');
        
    }

    // Logout

    function logout()
    {
        // For using Auth logout we need to setup rememberToken() column in database (Using model & migration)
        //Auth::guard('student')->logout(); 

        Session::flush();
    	return redirect('/login');
    }
}
