<?php

namespace App\Http\Controllers;

use App\Lecturer;
use App\User;
use Illuminate\Http\Request;
use Validator;
use Hash;

class LecturerController extends Controller
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
        $lecturers =User::join('lecturers','lecturers.user_id','=','users.id')->get();
        // dd($lecturers);
    
         return view('lecturer.index',compact('lecturers'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $units = Unit::all();

        return view('lecturer.create');
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
        'name'    =>  'required',
        'email'    =>  'required|email',
        'lec_code'    =>  'required',
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
   $lecturer = new Lecturer();
   $lecturer->user_id = $user_id;
   $lecturer->lecturer_code = $request->input('lec_code');
   if($lecturer->save()){
       return redirect()->route('lecturer.index')->with('message','Lecturer Saved Succesfully');
   }else{

    return redirect()->route('lecturer.index')->with('message','Lecturer Not Saved ');
   }

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function show(Lecturer $lecturer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function edit(Lecturer $lecturer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lecturer $lecturer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lecturer $lecturer)
    {
        //
    }
}
