
@extends('layouts.new_app')
@section('content')
<link href="{{ asset('css/student.css') }}" rel="stylesheet">
    <div class="nav-left-sidebar sidebar-light" style="background-color:slateblue">
        <div class="navbar ">
            <ul>
                <li><a href="{{route('show_courses', $student_id->id)}}">Your Courses</a></li>
            </ul>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end left sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">

            <div class="container-fluid dashboard-content ">   </div>
                <!-- ============================================================== -->
                <!-- pageheader  -->
                <!-- ============================================================== -->

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Student's Dashboard</h2>

                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Course Management</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

               
                    {{--displaying available courses for student to enroll in --}}
                    <h1>Courses</h1>
                    <h5>{{$student_id}}</h5>
                    <h5>{{$student_id->id}}</h5>
                    <h5>{{$courses}}</h5>
                    <h5>{{$course_levels}}</h5>
                    <h5>{{$course_categories}}</h5>
                <div class="ecommerce-widget">
                </div>
        <div class="ecommerce-widget">
        <!-- {{-- @foreach($courses as $course)
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                    <h5 class="card-title">{{$course_categories->name}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$course->name}}</h6>
                    <p class="card-text">{{$course_categories->description}}</p>
                    <a href="{{route('view_course', $course->id)}}" class="card-link">View Course</a>
                    <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
            @endforeach --}} -->

            <div class="ecommerce-widget"></div>
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class=""></h5>
                                    <div class="metric-value d-inline-block">
                                        <a class="mb-1" href=""><img src="assets/img/student.png" alt="" width="100px" height="100%"></a>
                                    </div>
                                </div>
                                <div id="sparkline-revenue"></div>
                            </div>
                        </div>
                    <div>

            <div class="ecommerce-widget"></div>
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class=""></h5>
                                            <div class="metric-value d-inline-block">
                                                <a class="mb-1" href=""><img src="assets/img/enroll.png" alt="" width="50px" height="60px"></a>
                                            </div>
                                        </div>
                                        <div id="sparkline-revenue"></div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class>Number of Courses enrolled</h5>
                                            <div class="metric-value d-inline-block">
                                                <h1 class="mb-1">0</h1>
                                            </div>
                                           
                                        </div>
                                        <div id="sparkline-revenue3"></div>
                                    </div>
                                </div>
                                                    

        </div>
    </div> 
  

            
        <!-- ============================================================== -->
        <!-- footer -->
         <!-- ============================================================== -->
       
    

@endsection