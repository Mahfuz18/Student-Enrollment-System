<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Input;
use File;
use DB;
use Session;
session_start();

class addStudentController extends Controller
{
    public function addstudent()
    {
    	return view('admin.addstudent');
    }

    public function save_student(Request $request)
    {
    	$info = array();


    	$info['name'] 			= $request->name;
    	$info['roll'] 			= $request->roll ;
    	$info['email'] 			= $request->email ;
    	$info['password'] 		= bcrypt($request->password) ;
    	$info['phone'] 			= $request->contact ;
    	$info['fathername'] 	= $request->fname ;
    	$info['mothername'] 	= $request->mname ;
    	$info['address'] 		= $request->address ;
    	$info['department'] 	= $request->department ;
    	$info['admissionyear']  = $request->year ;

    	// getiing image
    	$image = $request->file('userimage');

    	// setting up image for uploading
    	$image_name = str_random(20);
    	$image_ext  = strtolower($image->getClientOriginalExtension());
		$image_full_name = $image_name.'.'.$image_ext;

		// moving image to project file
		$actual_path = 'image/';
		$actual_url  = $actual_path.$image_full_name;
		$image->move($actual_path,$image_full_name);

		// putting image url into array
		$info['image'] = $actual_url;

		DB::table('students')->insert($info);
		Session::put('status','Successfully uploaded');

		return redirect('/addstudent');
    }
}
