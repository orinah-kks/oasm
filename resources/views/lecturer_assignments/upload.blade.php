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
            </div>
            </div>
        </div>
    </div>

@endsection