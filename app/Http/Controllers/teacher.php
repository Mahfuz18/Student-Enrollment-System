<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use File;
session_start();

class teacher extends Controller
{
    function teacher_home()
    {
    	return view('admin.addteacher');
    }

    function addteacher(Request $request)
    {
    	$data = array();

    	$data['name'] = $request->name;
    	$data['teacher_id'] = $request->teacherid;
    	$data['department'] = $request->department;
    	$data['email'] = $request->email;
    	$data['password'] = bcrypt($request->password);

    	$image = $request->file('image');
		$image_name = str_random(20);
    	$image_ext = strtolower($image->getClientOriginalExtension());
		$image_full_name = $image_name.'.'.$image_ext;

		$uplaod_path = 'image/';
		$path_in_db = $uplaod_path.$image_full_name;

		$data['phone'] = $path_in_db;

		$image->move($uplaod_path,$image_full_name);


		DB::table('teachers')
		->insert($data);

		Session::put('teacherstatus','Added successfuly');

		return redirect('/addteacher');


    }

    function allteachers()
    {
    	$all_teachers = DB::table('teachers')
    		->get();
    	return view('admin.allteachers', ['teachers' => $all_teachers]);

    }
}
