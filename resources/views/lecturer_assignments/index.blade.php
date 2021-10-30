@extends('layouts.main')
@section('content')
    <p> ASSIGNMENTS</p>

<div class="page-wrapper">
        <div class="col-md-12">

                      

                <div class="card">

                <div class="card-block">
                
                        <a href="{{route('lecturer_assignment.submited')}}" class="btn btn-primary pull-right" style="margin-right: 1px !important;"><i class="fa fa-eye"> View Submited Assignments</i></a>
                        <a href="{{route('lecturer_assignment.create')}}" class="btn btn-primary pull-right" style="margin-right: 1px !important;"><i class="fa fa-plus">Give Assignment</i></a>
                </div>
                <div class="card-block reset-table p-t-0">
                <div class="table-responsive">
                <table class="table">
                <thead>
                <tr class="text-uppercase">
                <th>UNIT CODE</th>
                <th>UNIT NAME</th>
                <th>DATE ASSIGNED</th>
                 </tr>
                </thead>
                <tbody>
                        @foreach ($datas as $item)
                    
                        <tr>
                <td>{{$item->unit_code}}  </td>
                <td>{{$item->unit_name}}</td>
            
                <td>{{$item->updated_at}}</td>
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