<?php

namespace App\Http\Controllers;

use App\Student;
use App\Course;
use App\User;
use Illuminate\Http\Request;
use Validator;
use Response;
use Hash;


class StudentController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $students = User::join('students','students.user_id','=','users.id')
                        ->join('courses','courses.id','=','students.course_id')
                        ->select([
                            'courses.name as course_name',
                            'users.name as student_name',
                            'students.reg_no as reg_no',
                            'users.id as user_id'
                        ])
                        ->get();
        return view('students.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $courses = Course::all();
        return view('students.create',compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $rules = [
            'name'    =>  'required',
            'email'    =>  'required|email',
            'reg_no'    =>  'required',
            'course_id'    =>  'required',
            'password'    =>  'required',
            'c_password'    =>  'required',
        ];
        $error = Validator::make($request->all(), $rules);
    
       if($error->fails())
       {
           return Response::json(['errors' => $error->errors()->all()]);
       }
    $password = $request->input('password');
    
       $user = new User();
       $user->name = $request->input('name');
       $user->email = $request->input('email');
       $user->password = Hash::make($password);
       $user->save();
    
       $user_id = $user->id;
       $student = new Student();
       $student->user_id = $user_id;
       $student->course_id = $request->input('course_id');
       $student->reg_no = $request->input('reg_no');
       if($student->save()){
        return redirect()->route('student.index')->with('message','Student Saved Succesfully');
    }else{
 
     return redirect()->route('student.index')->with('message','Student Not Saved ');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
