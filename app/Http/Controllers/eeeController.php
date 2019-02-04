<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class eeeController extends Controller
{
    function eee()
    {	
    	$eee_students = DB::table('students')
    					->where('department','eee')
    					->get();

    	return view('admin.eee',['eee_data' => $eee_students]);
    }
}
