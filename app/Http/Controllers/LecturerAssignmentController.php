<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unit;
use App\Lecturer;
use App\Course;
use App\Student;
use App\Submited;
use App\Assignment;
use Auth;
use Validator;
use Response;

class LecturerAssignmentController extends Controller
{

    function __construct()
    {
         $this->middleware('permission:lecturer');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public function index()
    {
     

        $datas = Unit::join('assignments','assignments.unit_id','=','units.id')
                ->get();
                // dd($data);
        return view('lecturer_assignments.index',compact('datas'));
    }

    public function submited()
    {
        // $lec_id = Lecturer::where('user_id',Auth::user()->id)->pluck('id')->first();

        // $student_id = Student::where('user_id',Auth::user()->id)->pluck('id')->first();

        $datas = Submited::join('units','units.id','=','submiteds.unit_id')
                            ->join('students','students.id','=','submiteds.student_id')
                            ->join('users','users.id','=','students.user_id')
                    ->select([
                        'units.unit_name as unit_name',
                        'units.unit_code as unit_code',
                        'submiteds.marks as marks',
                        'submiteds.status as status',
                        'submiteds.updated_at as updated',
                        'submiteds.id as id',
                        'users.name as student_name',
                        'students.reg_no as student_code',


                    ])
                ->get();
                // dd($datas);
        return view('lecturer_assignments.submited_assingments',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
        $units = Unit::all();
        $courses = Course::all();
        return view('lecturer_assignments.create',compact('units','courses'));
    }

    public function upload_results()
    {
        $units = Unit::all();
        $courses = Course::all();
        $students = Student::all();
        return view('lecturer_assignments.upload',compact('units','courses','students'));
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
            'course_id'    =>  'required',
            'unit_id'    =>  'required',
            'lec_assignment'    =>  'required',
        ];
        $error = Validator::make($request->all(), $rules);
    
       if($error->fails())
       {
           return Response::json(['errors' => $error->errors()->all()]);
       }

        // $lec_id = Lecturer::where('user_id',Auth::user()->id)->pluck('id')->first();
        if($request->hasfile('lec_assignment'))
        {
            $image =$request->file('lec_assignment');
            $name =$request->file('lec_assignment')->getClientOriginalName();
            $destinationPath ='/Given_Assignment';
            $image->move (public_path() . $destinationPath, $name);
            $oasms= new Assignment();
            $oasms->course_id = $request->input('course_id');
            $oasms->unit_id = $request->input('unit_id');
            $oasms->lecturer_id = Auth::user()->id;
            $oasms->assign_path=$name;
            $oasms->save();
        }
        return redirect()->route('lecturer_assignment.index');
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function upload_store(Request  $request){
        $rules = [
            'course_id'    =>  'required',
            'unit_id'    =>  'required',
            'student_id'    =>  'required',
            'marks'    =>  'required',
        ];
        $error = Validator::make($request->all(), $rules);
    
       if($error->fails())
       {
           return Response::json(['errors' => $error->errors()->all()]);
       }
       $course_id =$request->input('course_id');
       $unit_id =$request->input('unit_id');
       $student_id =$request->input('student_id');
       $marks =$request->input('marks');

    //    dd($student_id);
       Submited::where([
        ['course_id', '=', $course_id],
        ['unit_id', '=', $unit_id],
        ['student_id', '=', $student_id],
        ])->update([
           'marks'=>$marks,
           'status'=>'1'

       ]);
       
return redirect()->route('lecturer_assignment.submited');

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
