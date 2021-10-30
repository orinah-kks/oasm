@extends('layouts.main')
@section('content')
<div class="row">
    <div class="col-md-12">


<div class="card">
        <div class="card-header">
        <h5>Create Units</h5>
       <div class="card-header-right">
        <i class="icofont icofont-rounded-down"></i>
        <i class="icofont icofont-refresh"></i>
        <i class="icofont icofont-close-circled"></i>
        </div>
        </div>
        <div class="card-block">
        <form id="main" method="post" action="{{route('unit.store')}}" >
            @csrf
            <div class="row">
                <div class="col-md-6">
                        <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Course</label>
                                <div class="col-sm-10">
                                    <select name="course_id"  class="form-control">
                                        @foreach ($courses as $course)
                                    <option value="{{$course->id}}">{{$course->name}}</option>
                                        @endforeach
                                    </select>
                                <span class="messages"></span>
                                </div>
                                </div>
                </div>
                <div class="col-md-6">
                        <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Unit Code</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control"  name="unit_code" placeholder="Enter Unit Code">
                                <span class="messages"></span>
                                </div>
                                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                        <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Unit Name</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="unit_name"  placeholder="Enter unit name">
                                <span class="messages"></span>
                                </div>
                                </div>
                </div>
           
            </div>
    
       
        <div class="form-group row">
        <label class="col-sm-2"></label>
        <div class="col-sm-10">
        <button type="submit" class="btn btn-primary m-b-0">Submit</button>
        </div>
        </div>
         </form>
        </div>
        </div>
    </div>
</div>
@endsection