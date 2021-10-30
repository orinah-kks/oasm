<?php

namespace App\Http\Controllers;

use App\Assignment;
use App\Unit;
use App\Student;
use App\Submited;
use Auth;
use Response;
use Illuminate\Http\Request;
use Validator;

class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course_id = Student::where('id',Auth::user()->id)->pluck('course_id')->first();
        //

        // dd($course_id);
        $datas = Unit::join('assignments','assignments.unit_id','=','units.id')
                ->where('assignments.course_id',$course_id)
                ->select([
                    'units.unit_name as unit_name',
                    'units.unit_code as unit_code',
                    'assignments.updated_at as updated_at',
                    'assignments.id as assign_id',
                    'assignments.assign_path as assign_path'

                ])
                ->get();
                // dd($datas);
        return view('student_assignment.index',compact('datas'));
    }
    public function submited()
    {

        $student_id = Student::where('user_id',Auth::user()->id)->pluck('id')->first();

        $datas = Submited::join('units','units.id','=','submiteds.unit_id')
                    ->select([
                        'units.unit_name as unit_name',
                        'units.unit_code as unit_code',
                        'submiteds.marks as marks',
                        'submiteds.status as status',
                        'submiteds.id as id',

                    ])->where('submiteds.student_id',$student_id)
                ->get();
                // dd($datas);
        return view('student_assignment.submitted_assignments',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $units = Unit::all();

        return view('student_assignment.create',compact('units'));
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
            'unit_id'    =>  'required',
            'student_assignment'    =>  'required',
        ];
        $error = Validator::make($request->all(), $rules);
    
       if($error->fails())
       {
           return Response::json(['errors' => $error->errors()->all()]);
       }
    //    $student_id = Student::find(Auth::user()->id);
       $course_id = Student::where('id', Auth::user()->id)->value('course_id');
        // dd($student_id);

        if($request->hasfile('student_assignment'))
        {
            $image =$request->file('student_assignment');
            $name =$request->file('student_assignment')->getClientOriginalName();
            $destinationPath ='/Submited_Assignments';
            $image->move (public_path() . $destinationPath, $name);
            $oasms= new Submited();
            $oasms->course_id =$course_id;
            $oasms->unit_id =$request->input('unit_id');
            $oasms->student_id= Auth::user()->id;
            $oasms->status = '0'; 
            $oasms->marks = '0'; 
            $oasms->assign_path=$name;
            $oasms->save();


        }
return redirect()->route('student_assignment.index');
      
        
      
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function show(Assignment $assignment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function edit(Assignment $assignment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Assignment $assignment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assignment $assignment)
    {
        //
    }
 

    public function AssignmentDownload(Request $request,$id)
    {
        $assignment_path = Assignment::where('id',$id)->pluck('assign_path')->first();
        // dd($assignment_path);
                    $file= public_path(). "/Given_Assignment/";  //path of your directory
                    $headers = array(
                        'Content-Type: application/pdf',
                    );
                     return Response::download($file.$assignment_path, $assignment_path, $headers);      
    }
    public function SubmittedAssignmentDownload(Request $request,$id)
    {
        $assignment_path = Submited::where('id',$id)->pluck('assign_path')->first();
        // dd($assignment_path);
                    $file= public_path(). "/Submited_Assignments/";  //path of your directory
                    $headers = array(
                        'Content-Type: application/pdf',
                    );
                     return Response::download($file.$assignment_path, $assignment_path, $headers);      
    }
}
