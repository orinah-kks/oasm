@extends('layouts.main')
@section('content')
    <p> ASSIGNMENTs</p>

<div class="page-wrapper">
        <div class="col-md-12">
                <div class="card">

                        <div class="card-block">
                        
                                <a href="{{route('student_assignment.submited')}}" class="btn btn-primary pull-right" style="margin-right: 1px !important;"><i class="fa fa-eye"> View Submited Assignments</i></a>
                        
                                <a href="{{route('student_assignment.create')}}" class="btn btn-primary pull-right" style="margin-right: 1px !important;"><i class="fa fa-plus">Submit Assignment</i></a>
                        </div>
                        <div class="card-block reset-table p-t-0">
                        <div class="table-responsive">
                        <table class="table">
                        <thead>
                        <tr class="text-uppercase">
                        <th>UNIT CODE</th>
                        <th>UNIT NAME</th>
                        <th>DATE ASSIGNED</th>
                        <th>ACTION</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($datas as $item)
                        
                                <tr>
                                <td>{{ $item->unit_code }}</td>
                                <td>{{ $item->unit_name }}</td>
                                <td>{{$item->updated_at}}</td>
                                <td><a href="{{route('student_assignment.download',$item->assign_id)}}"><i class="fa fa-download"></i></a></td> 
                                </tr>
                        @endforeach
                        </tbody>
                        </table>
                        </div>
                        </div>
                </div>
        </div>
</div>
@endsection