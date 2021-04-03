
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
                    {{-- @if(count($courses)>0)
                        @foreach($courses as $course)
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="card">
                                        <div class="card-body" style="background-color:#00ffff">
                                            <h5 class="" style="color:#003765"><a href="/student/show_course/{{$course->id}}"> Course Title: {{$course->name}}</a></h5>
                                            <div class="metric-value d-inline-block">
                                                <a class="mb-1" href=""><img src="assets/img/addition.png" alt="" width="50px" height="40px"></a>
                                            </div>
                                            <small>Course author: {{$course->teacher_id}}</small>
                                        </div>
                                        <div id="sparkline-revenue"></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach --}}
                        {{-- <div class="page-links">
                            {if we use pagination)
                            {{$posts->links()}}
                            </div> --}}
                    {{-- @else
                            <p>No courses available</p>
                    @endif --}}  
                </div>
        <div class="ecommerce-widget">
        {{-- @foreach($courses as $course)
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
            @endforeach --}}

          <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                    </div>
                </div>
            </div>

        </div>
    </div> 
  

            
        <!-- ============================================================== -->
        <!-- footer -->
         <!-- ============================================================== -->
       
    

@endsection