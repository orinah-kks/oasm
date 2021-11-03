@extends('layouts.main')
@section('content')

<div class="row">
        <div class="col-md-12">
    
    
    <div class="card">
            <div class="card-header">
            <h5>upload assignment</h5>
           <div class="card-header-right">
            <i class="icofont icofont-rounded-down"></i>
            <i class="icofont icofont-refresh"></i>
            <i class="icofont icofont-close-circled"></i>
            </div>
            </div>
            <div class="card-block">
                @if ($count == 0)
                    <table class="table table-bordered border-dark w-50 mx-auto">
                        <tr>
                            <th>Name</th>
                            <th>Marks</th>
                        </tr>
                        
                        <tr>
                            <td colspan="2">
                                <p class="text-center lead">No assignments submitted yet</p>
                            </td>
                        </tr>
                    </table>
                @else
                    <table class="table table-striped border-dark w-50 mx-auto">
                        <tr >
                            <th>ID</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Marks</th>
                        </tr>
                        <form action="{{route('lecturer_assignment.upload_store')}}" method="POST">
                        @csrf
                            @foreach ($assignments as $item)
                                        <?php 
                                            $id = App\Student::where('id', $item->student_id)->value('user_id');
                                            $name = App\User::where('id', $id)->value('name');
                                            
                                        ?>
                                <tr>
                                    <td>
                                        {{ $item->student_id }}
                                        <input type="text" value="{{ $item->student_id }}" name="val[]" hidden class="form-control pe-none">
                                    </td>
                                    <td>
                                        {{ $name }}
                                    </td>
                                    <td>
                                        <input type="number" name="marks[]" id="marks" class="form-control w-50 m-auto" placeholder="{{ $item->marks }}">
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="3">
                                    <button type="submit" class="btn btn-sm btn-primary d-block w-50 m-auto">Submit</button>
                                </td>
                            </tr>
                        </form>
                    </table>
                @endif
                

            {{-- <form id="main" method="get" action="{{route('lecturer_assignment.upload_store')}}" enctype="multipart/form-data">

                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label>Select Course</label>
                            <div class="form-group row">
                                    <div class="col-sm-10">
                                        <select name="course_id" class="form-control" >
                                            @foreach ($courses as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                   <span class="messages"></span>
                                    </div>
                            </div>
                    </div>
                    <div class="col-md-6">
                        <label>Select Unit</label>
                            <div class="form-group row">
                                    <div class="col-sm-10">
                                        <select name="unit_id" class="form-control" >
                                            @foreach ($units as $item)
                                                
                                        <option value="{{$item->id}}">{{$item->unit_name}}</option>
                                            @endforeach
                                        </select>
                                   <span class="messages"></span>
                                    </div>
                                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Select Student</label>
                            <div class="form-group row">
                                    <div class="col-sm-10">
                                        <select name="student_id" class="form-control" >
                                            @foreach ($students as $item)
                                                
                                        <option value="{{$item->id}}">{{$item->reg_no}}</option>
                                            @endforeach
                                        </select>
                                   <span class="messages"></span>
                                    </div>
                            </div>
                    </div>

                    <div class="col-md-6">
                        <label>Marks Scored</label>
                            <div class="form-group row">
                                    <div class="col-sm-10">
                                        <input type="number" name="marks" id="" class="form-control">
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
             </form> --}}
            </div>
            </div>
        </div>
    </div>

@endsection