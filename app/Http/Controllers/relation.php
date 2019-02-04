<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class relation extends Controller
{
   	function csedepartment()
   	{
   		
   		$data = DB::table('students')
   		->join('teachers','students.department','=','teachers.department')
   		->where('students.department','=','EEE')
   		->select('students.name as sname','students.department','teachers.name as tname')
   		->get();

   		// echo "<pre>";
   		// 	echo $data;
   		// echo "</pre>";


   		return view('admin.relation',['relatonalData'=>$data]);
   	}
}
