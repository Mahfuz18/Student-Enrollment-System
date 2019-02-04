<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class cseController extends Controller
{
    function cse()
    {
    	$cse_students = DB::table('students')
    					->where('department','cse')
    					->get();

    	return view('admin.cse',['cse_data' => $cse_students]);
    }
}
