@extends('layouts.main')
@section('content')


<div class="card">
    <div class="card-header">
    <h5>Add Lecturer</h5>
    </div>
    <div class="card-block">
    <form id="second" action="{{route('lecturer.store')}}" method="post" novalidate>
        @csrf
    <div class="form-group row">
    <div class="col-md-6">        
     <label class="">Lecturer Name</label>      
    <input type="text" class="form-control" id="usernameP" name="name" placeholder="Enter Name">
    <span class="messages popover-valid"></span>
    </div>
    <div class="col-md-6">        
     <label class="">Lecturer Email</label>      
    <input type="email" class="form-control" id="usernameP" name="email" placeholder="Enter Email">
    <span class="messages popover-valid"></span>
    </div>
    </div>
    <div class="form-group row">
    <div class="col-md-6">        
     <label class="">Lecturer Code</label>      
    <input type="text" class="form-control" id="usernameP" name="lec_code" placeholder="Enter Code">
    <span class="messages popover-valid"></span>
    </div>
    <div class="col-md-6">        
     <label class="">Password</label>      
    <input type="password" class="form-control" id="usernameP" name="password" placeholder="Enter Password">
    <span class="messages popover-valid"></span>
    </div>
    </div>
    <div class="form-group row">
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
{{-- 
<div class="card">
    <div class="card-header">
    <h5>Send assignment</h5>
    <div class="card-header-right">
    <i class="icofont icofont-rounded-down"></i>
    <i class="icofont icofont-refresh"></i>
    <i class="icofont icofont-close-circled"></i>
    </div>
    </div>
    <div class="card-block">
    <form id="second" action="http://html.codedthemes.com/" method="post" novalidate>
    <div class="form-group row">
    <label class="col-sm-2 col-form-label">Select Unit</label>
    <div class="col-sm-10">
            
                <select name="unit_id" class="form-control" >
                    

                    
                </select>
                
    <input type="text" class="form-control" id="usernameP" name="Username" placeholder="Enter Username">
    <span class="messages popover-valid"></span>
    </div>
    </div>
    <div class="form-group row">
    <label class="col-sm-2 col-form-label">Select Assignmnent</label>
    <div class="col-sm-10">

    <input type="file" class="form-control" id="EmailP" name="Email" placeholder="choose assignment to give students">
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
    </div> --}}
    
@endsection