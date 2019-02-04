<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
use Auth;
use DB;
session_start();

class adminController extends Controller
{


	public function showLoginPage(){
		return view('admin.alogin');
	}

    public function login(Request $request){
	   	
        $email 	  =  $request->email;
    	$password =  $request->password;

    	if(Auth::guard('admin')->attempt(['email' => $email, 'password' => $password]))
    	{
       		return redirect('/a_dashboard');
    	}

		else
    	{
    		Session::put('exception','Email or password is invalid');
    		return redirect('/admin');
    	}
    }


    public function dashboard(){

        $numOfStudents = DB::table('students')->get();
        $num1 =  $numOfStudents->count();

        $numOfTeachers = DB::table('teachers')->get();
        $num2 =  $numOfTeachers->count();

        return view('admin.dashboard',compact(['num1','num2']));
    }


    public function profile()
    {
        $mail =  Session::get('adminMail');
        $result = DB::table('admins')
                    ->where('email',Auth::guard('admin')->user()->email)
                    ->first(); 
        return view('admin.profile',['result'=>$result]);
    }

    public function logout()
    {
        Session::flush();
        return redirect('/admin');
    }

    // View student details

    function view_profile($id)
    {
        $student_profile = DB::table('students')
                         ->select('*')
                         ->where('id',$id)
                         ->first();

        return view('admin.studentprofile',['personaldata'=>$student_profile]);

    }


    function delete($id)
    {
        DB::table('students')
        ->where('id',$id)
        ->delete();

        return redirect('/allstudent');

    }


}
