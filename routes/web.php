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


//  Sorry for the messy routing protection. Its my first laravel multiauth application. Next apps will be neat & clean.

Route::get('/',function(){
	return view('home');
})->name('home');

// Admin Tasks Start Here

Route::get('/admin','adminController@showLoginPage')->name('admin')->middleware('guest:admin');
Route::post('/admin','adminController@login')->middleware('guest:admin');
Route::get('/a_dashboard','adminController@dashboard')->middleware('auth:admin');
Route::get('/profile','adminController@profile')->middleware('auth:admin');
Route::get('/admin-logout','adminController@logout');


// view student profile
Route::get('/view/{id}','adminController@view_profile')->middleware('auth:admin');


// delete a student
Route::get('/delete/{id}','adminController@delete')->middleware('auth:admin');


// add student
Route::get('/allstudent','allStudentController@allstudent')->middleware('auth:admin');
Route::get('/addstudent','addStudentController@addstudent')->middleware('auth:admin');
Route::post('/savestudent','addStudentController@save_student')->middleware('auth:admin');


// add teacher$request->method();
Route::get('/addteacher','teacher@teacher_home')->middleware('auth:admin');
Route::post('/adding_teacher','teacher@addteacher')->middleware('auth:admin');
Route::get('/allteacher','teacher@allteachers')->middleware('auth:admin');
Route::get('/result','resultController@result')->middleware('auth:admin');
Route::get('/tutionfee','tutionFeeController@tutionfee')->middleware('auth:admin');
Route::get('/cse','cseController@cse')->middleware('auth:admin');
Route::get('/eee','eeeController@eee')->middleware('auth:admin');


// Database Relationship
Route::get('/csedepartment','relation@csedepartment')->middleware('auth:admin');

// End of Admin Panel Tasks 





// Student part start
Route::get('/login','studentController@login')->name('login')->middleware('guest:student');
Route::post('/login','studentController@login_check')->middleware('guest:student');

Route::get('/student_dashboard','studentController@dashboard')->middleware('auth:student');
Route::get('/student_profile','studentController@profile')->middleware('auth:student');
Route::get('/update_profile','studentController@show_update_profile')->middleware('auth:student');

Route::get('/student_logout','studentController@logout')->middleware('auth:student');
Route::post('/update_sprofile','studentController@updateProcess')->middleware('auth:student');



// Student part end