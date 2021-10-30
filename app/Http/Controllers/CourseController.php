<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use Validator;

class CourseController extends Controller
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
        //
        $courses = Course::all();
         return view('courses.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $rules = [
            'course_name'    =>  'required',
            'course_code'    =>  'required',
        ];
        $error = Validator::make($request->all(), $rules);

       if($error->fails())
       {
           return Response::json(['errors' => $error->errors()->all()]);
       }
       $course = new Course();
       $course->name = $request->input('course_name');
       $course->code = $request->input('course_code');
       if($course->save()){
           return redirect()->route('course.index')->with('success','Course saved succesfully');
       }else{

        return redirect()->route('course.index')->with('warning','Course not saved');
       }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }
}
