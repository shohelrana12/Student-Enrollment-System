<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
 Session_start();

class TeacherController extends Controller
{
    public function allteacher(){

    	$allteacher_info=DB::table('teacher_tbl')
   	                 ->get();

   	 $manage_teacher=view('admin.allteacher')  
   	                 ->with('all_teacher_info', $allteacher_info);
   	     return view('layout')
   	                 ->with('allteacher', $manage_teacher);     
    }

    public function addteacher(){

    	return view('admin.add_teacher');
    }

    public function save_teacher(request $request){
    $data=array();
    	$data['teacher_name']=$request->teacher_name;
    	$data['teacher_phone']=$request->teacher_phone;
    	$data['teacher_address']=$request->teacher_address;
    	$data['teacher_department']=$request->teacher_department;
    	$image=$request->file('teacher_image');

    	if($image){
    		$image_name=str_random(20);
    		$ext=strtolower($image->getClientOriginalExtension());
    		$image_full_name=$image_name.'.'.$ext;
    		$upload_path='image/';
    		$image_url=$upload_path.$image_full_name;
    		$success=$image->move($upload_path, $image_full_name);
    		if($success){
    			$data['teacher_image']=$image_url;


    			DB::table('teacher_tbl')->insert($data);
    			Session::put('exception','teacher added successfully!!');
    			return Redirect::to('/addteacher');
    		}
    	}
    	$data['image']=$image_url;
    	DB::table('teacher_tbl')->insert($data);
    	Session::put('exception','teacher added successfully!!');
    	return Redirect::to('/addteacher');





    	DB::table('teacher_tbl')->insert($data);
    			Session::put('exception','teacher added successfully!!');
    			return Redirect::to('/addteacher');

    	
    }



}
