@extends('layouts.main')

@section('content')

  <div class="page-wrapper">
<p style="margin-left:20px;">Students</p>

        <div class="col-md-12">
                <div class="card">
                <div class="card-block">


                <a href="{{route('student.create')}}" class="btn btn-primary pull-right" style="margin-right: 1px !important;"><i class="fa fa-plus">Add Student</i></a>
              
            
                </div>
                <div class="card-block reset-table p-t-0">
                <div class="table-responsive">
                <table class="table">
                <thead>
                <tr class="text-uppercase">
                <th>Student Code</th>
                <th>Student Name</th>
                <th>Course </th>
                <th>ACTION</th>
                 </tr>
                </thead>
                <tbody>
                    @foreach ($students as $item)
                        
                <tr>
                <td>{{$item->reg_no}}</td>
                <td>{{$item->student_name}}</td>
                <td>{{$item->course_name}}</td>
                <td><i class="fa fa-trash"><a href="{{route('course.destroy',$item->user_id)}}"></a></i></td>
                
              
                </tr>
                @endforeach

       
                </tbody>
                </table>
                </div>
                </div>
                </div>
                </div>
</div>
        


    </div>
@endsection



