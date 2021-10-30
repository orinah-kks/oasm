@extends('layouts.main')
@section('content')
    
<div class="page-wrapper">
     
        <div class="page-body">
        <div class="row">
        
        <div class="col-md-6 col-xl-4">
        <div class="card">
        <div class="card-block-big card-visitor-block">
        <div class="row">
        <div class="col-sm-8  card-visitor-button">
        <button class="btn btn-primary btn-icon"><i class="icofont icofont-user-alt-3"></i></button>
        <div class="card-contain">
        <h6>{{$users}}</h6>
        <p class="text-muted f-18 m-0">Users</p>
        </div>
        </div>
        <div class="col-sm-4 text-center">
        <span class="visitor-chart"></span>
        </div>
        </div>
        </div>
        </div>
        </div>
        <div class="col-md-6 col-xl-4">
        <div class="card">
        <div class="card-block-big card-visitor-block">
        <div class="row">
        <div class="col-sm-8 card-visitor-button">
        <button class="btn btn-warning btn-icon"><i class="icofont icofont-shopping-cart"></i></button>
        <div class="card-contain">
        <h6>{{$lecturer}}</h6>
        <p class="text-muted f-18 m-0">Lecturers</p>
        </div>
        </div>
        <div class="col-sm-4 text-center">
        <span class="sale-chart"></span>
        </div>
        </div>
        </div>
        </div>
        </div>
        <div class="col-md-12 col-xl-4">
        <div class="card">
        <div class="card-block-big card-visitor-block">
        <div class="row">
        <div class="col-sm-8 card-visitor-button">
        <button class="btn btn-success btn-icon"><i class="icofont icofont-shopping-cart"></i></button>
        <div class="card-contain">
        <h6>{{$student}}</h6>
        <p class="text-muted f-18 m-0">Students</p>
        </div>
        </div>
        <div class="col-sm-4 text-center">
        <span class="resource-barchart"></span>
        </div>
        </div>
        </div>
        </div>
        </div>
        
        
        
        <div class="col-xl-8 col-md-6">
        <div class="card">
        <div class="card-block">
        <h5>University system usage analysis</h5>
        </div>
        <div class="card-block">
        <div id="analythics-graph" style="height:340px"></div>
        </div>
        </div>
        </div>
        
        <div class="col-xl-4 col-md-6">
        <div class="user-card-block card">
        <div class="card-block">
        <div class="top-card text-center">
            {{-- <img src="assets/images/widget/user1.png" class="img-responsive" alt=""> --}}
        </div>
        <div class="card-contain text-center p-t-40">
        <h5 class="text-capitalize p-b-10">ASSIGNMENT SUBMISSION SYSTEM</h5>
        <p class="text-muted">Machakos university</p>
        </div>
        <div class="card-data m-t-40">
        <div class="row">
        <div class="col-3 b-r-default text-center">
        <p class="text-muted">Followers</p>
        <span>770</span>
        </div>
        <div class="col-3 b-r-default text-center">
        <p class="text-muted">Following</p>
        <span>20</span>
        </div>
        <div class="col-3 b-r-default text-center">
        <p class="text-muted">Questions</p>
        <span>26</span>
        </div>
        <div class="col-3 text-center">
        <p class="text-muted">Answers</p>
        <span>120</span>
        </div>
        </div>
        </div>
        <div class="card-button p-t-50">
        <div class="row">
        <div class="col-6 text-right">
        <button class="btn btn-primary btn-round">Follow</button>
        </div>
        <div class="col-6 text-left">
        <button class="btn btn-success btn-round">Message</button>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
       
        </div>
        </div>
        </div>
        <div id="styleSelector">
        </div>
        
        
@endsection