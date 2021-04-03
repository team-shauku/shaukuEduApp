@extends('layouts.new_app')


@section('content')
<link href="{{ asset('css/student.css') }}" rel="stylesheet">
<div class="nav-left-sidebar sidebar-light" style="background-color:slateblue">
    <div class="nav-bar">
        <ul>
            <li><a href="/student">Dashboard</a></li>
        </ul>
    </div>

    </div>

    <!-- end left sidebar -->

    <!-- wrapper  -->

    <div class="dashboard-wrapper">
    
    <div class="container-fluid dashboard-content "></div>
       
                <!-- pageheader  -->

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Student's Dashboard</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="/student" class="breadcrumb-link">Course Management</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Courses Enrolled</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
                    
        @if ($message = Session::get('succes'))
            <div class="alert alert-success">
                <p>{{$message}}</p>
            </div>
        @endif
        {{-- show courses enrolled in a table format --}}
        <table class="table table-bordered">
            <tr>
                <th>Index</th>
                <th>Course</th>
                <th>Teacher</th>
                <th width="280px">Action</th>
            </tr>
     
                @foreach ($courses as $course)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$course->name}}</td>
                        <td>{{$course->teacher}}</td>
                        <td>
                            <form action="{{route('students.destroy', $course->id)}}" method="POST">
                                <a class="btn btn-info" href="{{route('study_course',$course->id)}}">Show</a>
        
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    
                @endforeach

        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            Copyright © Shauku. All rights reserved.
                    </div>
                </div>
            </div>
        </div>
           
                <!-- end footer -->
              
    </div>
         
            <!-- end wrapper  -->
         
     
@endsection