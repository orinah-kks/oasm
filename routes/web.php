
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
// Front End Routes
Route::get('/', 'FrontEndController@index')->name('index');
Route::get('/about', 'FrontEndController@about')->name('about');
Route::get('/contact', 'FrontEndController@contact')->name('contact');
// Back End Routes
Route::get('/home', 'HomeController@index')->name('home');
// .................>Spartie Permissions..............//

Route::resource('roles','RoleController');
Route::resource('users','UserController');

//................unit routes.............//

Route::get('units/index','UnitController@index')->name('unit.index');
Route::get('units/create','UnitController@create')->name('unit.create');
Route::post('units/store','UnitController@store')->name('unit.store');

//.........................Student assignmets...............//
Route::get('student_assignment/create','AssignmentController@create')->name('student_assignment.create');
Route::get('student_assignment/submited','AssignmentController@submited')->name('student_assignment.submited');
Route::get('student_assignment/index','AssignmentController@index')->name('student_assignment.index');
Route::post('student_assignment/store','AssignmentController@store')->name('student_assignment.store');
Route::get('student_assign_download/{id}','AssignmentController@AssignmentDownload')->name('student_assignment.download');
Route::get('submited_assignment/{id}','AssignmentController@SubmittedAssignmentDownload')->name('submited_assignment.download');

//.........................Lecturer assignmets...............//
Route::get('lecturer_assignment/create','LecturerAssignmentController@create')->name('lecturer_assignment.create');
Route::get('lecturer_assignment/upload_results','LecturerAssignmentController@upload_results')->name('lecturer_assignment.upload_results');
Route::get('lecturer_assignment/submited','LecturerAssignmentController@submited')->name('lecturer_assignment.submited');
Route::get('lecturer_assignment/index','LecturerAssignmentController@index')->name('lecturer_assignment.index');
Route::post('lecturer_assignment/store','LecturerAssignmentController@store')->name('lecturer_assignment.store');
Route::get('lecturer_assignment/upload_store','LecturerAssignmentController@upload_store')->name('lecturer_assignment.upload_store');
Route::get('lecturer_submited_assignment/{id}','LecturerAssignmentController@SubmittedAssignmentDownload')->name('lecturer_submited_assignment.download');


//............................lecturer.........................//

Route::get('lecturer/index','LecturerController@index')->name('lecturer.index');
Route::get('lecturer/create','LecturerController@create')->name('lecturer.create');
Route::post('lecturer/store','LecturerController@store')->name('lecturer.store');

// Courses 

Route::get('courses/index','CourseController@index')->name('course.index');
Route::get('courses/create','CourseController@create')->name('course.create');
Route::post('courses/store','CourseController@store')->name('course.store');
Route::get('courses/delete/{id}','CourseController@destroy')->name('course.destroy');

// .....................Students.........................//
Route::get('students/index','StudentController@index')->name('student.index');
Route::get('students/create','StudentController@create')->name('student.create');
Route::post('students/store','StudentController@store')->name('student.store');
Route::post('students/delete/{id}','StudentController@destroy')->name('student.destroy');

// ....................Perimission......................//

Route::get('/permissions/create','PermissionController@index')->name('create.permission');
Route::post('/permissions/store','PermissionController@store')->name('store.permission');