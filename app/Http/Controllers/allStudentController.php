<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class allStudentController extends Controller
{
    public function allstudent()
    {
    	// Getting all data from student table
    	$data = DB::table('students')->get();

    	// Sending selected data to allstudent page
    	return view('admin.allstudent', ['student_info' => $data]);
    }
}
