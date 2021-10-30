@extends('layouts.main')
@section('content')
    <p> ASSIGNMENTs</p>

<div class="page-wrapper">
        <div class="col-md-12">

                      

                <div class="card">

                <div class="card-block">
                
                        <a href="{{route('student_assignment.create')}}" class="btn btn-primary pull-right" style="margin-right: 1px !important;"><i class="fa fa-plus">Submit Assignment</i></a>
                </div>
                <div class="card-block reset-table p-t-0">
                <div class="table-responsive">
                <table class="table">
                <thead>
                <tr class="text-uppercase">
                <th>UNIT CODE</th>
                <th>UNIT NAME</th>
                <th>STATUS</th>
                <th>MARKS</th>
                <th>ACTION</th>
                 </tr>
                </thead>
                <tbody>
                 @foreach ($datas as $item)
                    
                        <tr>
                <td>{{$item->unit_code}}  </td>
                <td>{{$item->unit_name}}</td>
                @if ($item->status == '0')
                   
                <td><button type="button" class="btn btn-primary btn-round">Submited</button></td> 
                @elseif($item->status == '1')
                    
              <td><button type="button" class="btn btn-success btn-round">Marked</button></td>
           
                @endif

                <td>{{$item->marks}}</td>
              <td><a href="{{route('submited_assignment.download',$item->id)}}"><i class="fa fa-download"></i></a></td>
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