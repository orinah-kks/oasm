@extends('layouts.main')

@section('content')

  <div class="page-wrapper">
<p style="margin-left:20px;">Unit list</p>

        <div class="col-md-12">
                <div class="card">
                <div class="card-block">


                <a href="{{route('unit.create')}}" class="btn btn-primary pull-right" style="margin-right: 1px !important;"><i class="fa fa-plus">Add Unit</i></a>
              
            
                </div>
                <div class="card-block reset-table p-t-0">
                <div class="table-responsive">
                <table class="table">
                <thead>
                <tr class="text-uppercase">
                <th>UNIT CODE</th>
                <th>UNIT NAME</th>
                 </tr>
                </thead>
                <tbody>
                    @foreach ($units as $item)
                        
                <tr>
                <td>{{$item->unit_code}}</td>
                <td>{{$item->unit_name}}</td>
                
              
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



