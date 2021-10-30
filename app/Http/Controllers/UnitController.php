<?php

namespace App\Http\Controllers;

use App\Unit;
use App\Course;
use Illuminate\Http\Request;
use Validator;
use Response;
class UnitController extends Controller
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
        $units = Unit::all();
        return view('unit.index',compact('units'));
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
        // dd($courses);
        return view('unit.create',compact('courses'));
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
            'unit_name'    =>  'required',
            'unit_code'    =>  'required',
            'course_id'    =>  'required',
        ];
        $error = Validator::make($request->all(), $rules);
    
       if($error->fails())
       {
           return Response::json(['errors' => $error->errors()->all()]);
       }
        $unit = new Unit();
        $unit->unit_name =$request->input('unit_name');
        $unit->unit_code = $request->input('unit_code');
        $unit->course_id = $request->input('course_id');
       if ( $unit->save()) {
           
       return redirect()->route('unit.index')->with('message','Unit Saved Succesfully');
       }else{

       return redirect()->route('unit.index')->with('message','Lecturer Not Saved');
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function show(Unit $unit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function edit(Unit $unit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Unit $unit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unit $unit)
    {
        //
    }
}
