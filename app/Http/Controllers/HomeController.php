<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Lecturer;
use App\Student;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        if ($user->hasRole('Administrator')) {
            
        $users = User::count();
        $lecturer = Lecturer::count();
        $student = Student::count();
        return view('dashboard.index',compact('users','lecturer','student'));
        }
        elseif ($user->hasRole('Lecturer')) {
           return redirect()->route('lecturer_assignment.index');
        }
        elseif ($user->hasRole('Student')) {
            
           return redirect()->route('student_assignment.index');
        }
    }
}
