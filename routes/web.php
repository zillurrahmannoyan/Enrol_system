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
//Logout Controller----------------------------------------------
Route::get('/logout', 'AdminController@logout');

Route::get('/', function () {
    return view('student_login');
});
Route::get('/backend', function () {
    return view('admin.admin_login');
});

//Admin Route.................................
Route::post('/adminlogin', 'AdminController@login_dashboard');
Route::get('/admin-dashboard', 'AdminController@admin_dashboard');
Route::get('/view-profile', 'AdminController@view_profile');
Route::get('/setting', 'AdminController@setting');

//Add & View  && Delete Student -------------
Route::get('/add-student', 'AddStudentController@add_student');
Route::post('/save-student', 'AddStudentController@save_student');
Route::get('/all-student', 'AllStudentController@all_student');
Route::get('/student-delete/{student_id}', 'AllStudentController@delete_student');
Route::get('/student-view/{student_id}', 'AllStudentController@view_student');
Route::get('/student-edit/{student_id}', 'AllStudentController@edit_student');
Route::post('/student-update/{student_id}', 'AllStudentController@update_student');

Route::get('/tutionfee', 'TutionController@tutionfee');

Route::get('/result', 'AddStudentController@result');
//Depertment------------
Route::get('/cse', 'AllDepertmentController@cse_depertment');
Route::get('/bba', 'AllDepertmentController@bba_depertment');
Route::get('/ece', 'AllDepertmentController@ece_depertment');
Route::get('/eee', 'AllDepertmentController@eee_depertment');
Route::get('/mba', 'AllDepertmentController@mba_depertment');

//Add Teacher---------------------
Route::get('/add-teacher', 'AllTeacherController@add_teacher');
Route::get('/all-teacher', 'AllTeacherController@all_teacher');
Route::post('/save-teacher', 'AllTeacherController@save_teacher');
Route::get('/teacher-view/{teacher_id}', 'AllTeacherController@view_teacher');
Route::get('/teacher-delete/{teacher_id}', 'AllTeacherController@delete_teacher');





