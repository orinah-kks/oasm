@extends('layouts.main')
@section('content')
    <p> ASSIGNMENTs</p>

<div class="page-wrapper">
        <div class="col-md-12">

                      

                <div class="card">

                <div class="card-block">
                
                        <a href="{{route('lecturer_assignment.upload_results')}}" class="btn btn-primary pull-right" style="margin-right: 1px !important;"><i class="fa fa-upload">Upload Assignment Results</i></a>
                </div>
                <div class="card-block reset-table p-t-0">
                <div class="table-responsive">
                <table class="table">
                <thead>
                <tr class="text-uppercase">
                <th>STUDENT CODE</th>
                <th>UNIT NAME</th>
                <th>DATE SUBMITED</th>
                <th>ACTION</th>
                 </tr>
                </thead>
                <tbody>
                        @foreach ($datas as $item)
                    
                        <tr>
                <td>{{$item->student_code}}  </td>
                <td>{{$item->unit_name}}</td>
            
                <td>{{$item->updated}}</td>
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