<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SWEController extends Controller
{
    public function swe(){

    	$swestudent_info=DB::table('student_tbl')
    	            ->where(['student_department'=>3])
   	                 ->get();

   	 $manage_student=view('admin.swe')  
   	                 ->with('swe_student_info', $swestudent_info);
   	     return view('layout')
   	                 ->with('swe', $manage_student);       

    	//return view('admin.swe');
    }
}
