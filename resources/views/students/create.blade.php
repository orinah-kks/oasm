@extends('layouts.main')
@section('content')


<div class="card">
    <div class="card-header">
    <h5>Add Student</h5>
    </div>
    <div class="card-block">
    <form id="second" action="{{route('student.store')}}" method="post" novalidate>
        @csrf
    <div class="form-group row">
    <div class="col-md-6">        
     <label class="">Student Name</label>      
    <input type="text" class="form-control" id="usernameP" name="name" placeholder="Enter Name">
    <span class="messages popover-valid"></span>
    </div>
    <div class="col-md-6">        
     <label class="">Student Email</label>      
    <input type="email" class="form-control" id="usernameP" name="email" placeholder="Enter Email">
    <span class="messages popover-valid"></span>
    </div>
    </div>
    <div class="form-group row">
    <div class="col-md-6">        
     <label class="">Registration Number</label>      
    <input type="text" class="form-control" id="usernameP" name="reg_no" placeholder="Enter Code">
    <span class="messages popover-valid"></span>
    </div>
    <div class="col-md-6">        
        <label class="">Student Course</label>    
        <select name="course_id" id="" class="form-control">
            @foreach ($courses as $course)
                
        <option value="{{$course->id}}">{{$course->name}}</option>   
            @endforeach 
        </select>  
       <span class="messages popover-valid"></span>
       </div>
  
    </div>
    <div class="form-group row">
        <div class="col-md-6">        
            <label class="">Password</label>      
           <input type="password" class="form-control" id="usernameP" name="password" placeholder="Enter Password">
           <span class="messages popover-valid"></span>
           </div>
    <div class="col-md-6">        
     <label class="">Confirm Password</label>      
    <input type="password" class="form-control" id="usernameP" name="c_password" placeholder="Confirm Password">
    <span class="messages popover-valid"></span>
    </div>
    
    </div>
  
    <div class="row">
    <label class="col-sm-2"></label>
    <div class="col-sm-10">
    <button type="submit" class="btn btn-primary m-b-0">Submit</button>
    </div>
    </div>
    </form>
    </div>
    </div>

@endsection