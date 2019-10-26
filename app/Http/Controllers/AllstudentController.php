<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
 Session_start();

class AllstudentController extends Controller
{
   public function allstudent(){

   	$allstudent_info=DB::table('student_tbl')
   	                 ->get();

   	 $manage_student=view('admin.allstudent')  
   	                 ->with('all_student_info', $allstudent_info);
   	     return view('layout')
   	                 ->with('allstudent', $manage_student);                       

    	//return view('admin.allstudent');
    }


    //student delete method......................

    public function studentdelete($student_id){

    	//echo "success";
    	DB::table('student_tbl')
    	   ->where('student_id', $student_id)
    	   ->delete();

    	   return Redirect::to('/allstudent');

   	
    }

    // student information view method...........
    public function studentview($student_id){
    	//return view('admin.viewprofile');

    	$student_description_view=DB::table('student_tbl')
    	   ->select('*')
    	  ->where('student_id', $student_id)
    	   ->first();


    	  // echo "/pre";
    	   //print_r($student_description_viewprofile);
    	   // echo "/pre";


    	   $manage_description_student=view('admin.view')
    	     ->with('student_description_profile', $student_description_view);

    	return view('layout')
    	    ->with('view', $manage_description_student);
    }

    //view...........................
    public function studentedit($student_id){
$student_description_view=DB::table('student_tbl')
    	   ->select('*')
    	  ->where('student_id', $student_id)
    	   ->first();


    	  // echo "</pre>";
    	  // print_r($student_description_view);
    	  //  echo "</pre>";


    	   $manage_description_student=view('admin.student_edit')
    	    ->with('student_description_profile', $student_description_view);

    	   return view('layout')
    	    ->with('student_edit', $manage_description_student);
   	
    }

    //update here part...............
    public function studentupdate(Request $request, $student_id){

    	//echo "<pre>";
    	//print_r($student_id);

    	$data=array();
    	  $data['student_name']=$request->student_name;
    	  $data['student_roll']=$request->student_roll;
    	  $data['student_fathersname']=$request->student_fathersname;
    	  $data['student_mothersname']=$request->student_mothersname;
    	  $data['student_email']=$request->student_email;
    	  $data['student_phone']=$request->student_phone;
    	  $data['student_address']=$request->student_address;
    	  $data['student_password']=$request->student_password;
    	  $data['student_admissionyear']=$request->student_admissionyear;


    	     DB::table('student_tbl')
    	     ->where('student_id', $student_id)
    	     ->update($data);

    	     Session::put('exception', 'student update successfully');
    	     return Redirect::to('/allstudent');
    }

    //student update own here part...............
    public function studentownupdate(Request $request){

        //echo "<pre>";
        //print_r($student_id);
        $student_id=Session::get('student_id');
        $data=array();
          $data['student_phone']=$request->student_phone;
          $data['student_address']=$request->student_address;
          $data['student_password']=$request->student_password;
          
             DB::table('student_tbl')
             ->where('student_id', $student_id)
             ->update($data);

             Session::put('exception', 'student update successfully');
             return Redirect::to('/student_setting');
    }
}
