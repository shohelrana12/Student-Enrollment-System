<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Logout.............
Route::get('/logout','AdminController@logout');
Route::get('/student_logout','AdminController@student_logout');




Route::get('/', function () {
    return view('student_login');
});
Route::get('/admin', function () {
    return view('admin.admin_login');
});

//admin login.....................
Route::post('/adminlogin','AdminController@login_dashboard');
Route::post('/studentlogin','AdminController@student_login_dashboard');

Route::get('/student_dashboard','AdminController@student_dashboard');

Route::get('/admin_dashboard','AdminController@admin_dashboard');
Route::get('/viewprofile','AdminController@viewprofile');
Route::get('/setting','AdminController@setting');
//student setting here........
Route::get('/student_setting','AdminController@studentsetting');

// student setting................
Route::get('/student_profile','AddstudentController@studentprofile');



//add student............
Route::get('/addstudent','AddstudentController@addstudent');
Route::post('/save_student','AddstudentController@save_student');
Route::get('/student_delete/{student_id}','AllstudentController@studentdelete');
Route::get('/student_view/{student_id}','AllstudentController@studentview');
Route::get('/student_edit/{student_id}','AllstudentController@studentedit');
Route::post('/update_student/{student_id}','AllstudentController@studentupdate');
// student setting update part here.........
Route::post('/student_own_update','AllstudentController@studentownupdate');





//all teacher.................
Route::get('/allteacher','TeacherController@allteacher');
Route::get('/addteacher','TeacherController@addteacher');
Route::post('/save_teacher','TeacherController@save_teacher');

//All student...............
Route::get('/allstudent','AllstudentController@allstudent');
//Tution..................
Route::get('/tutionfee','TutionController@tutionfee');

Route::get('/cse','CSEController@cse');
Route::get('/bba','BBAController@bba');
Route::get('/swe','SWEController@swe');
Route::get('/eee','EEEController@eee');
Route::get('/mba','MBAController@mba');

