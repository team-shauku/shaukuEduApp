
@extends('layouts.new_app')
@section('content')
<link href="{{ asset('css/student.css') }}" rel="stylesheet">
    <div class="nav-left-sidebar sidebar-light" style="background-color:slateblue">
        <div class="navbar ">
            <ul>
                <li><a href="{{route('/student')}}">Dashboard</a></li>
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
                            <li class="breadcrumb-item " >Course Management</li>
                            <li class="breadcrumb-item active" aria-current="page">Course Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

               
                    {{--displaying available courses for student to enroll in --}}
                   
                <div class="ecommerce-widget">
                    
                  
                    <figure class="figure">
                        <div>
                            <img src="assets/img/student.png" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                        </div>
                    </figure>
                        <div>
                            <h2>Course Details</h2>
                            {{-- underline --}}
                            <h3>Teacher:</h3>
                            <h3>Date Created</h3>
                            <h3>Course Description</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam natus ex id, iure quis, quibusdam similique accusamus itaque expedita 
                                optio doloremque doloribus reprehenderit vitae cupiditate! Nihil labore voluptatem eum accusantium?</p> 
                            <form action="{{route('student.store',$course_id)}}" method="POST">                               
                            <button class="btn btn-info">Enroll</button>
                            </form>
                        </div>
                    </div>
                      
            
                        </div>
       
        
            
        </div>
        
  

            
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                         Copyright © Shauku. All rights reserved.
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection


{{-- @section('content')
    <a href="/student" class="">Go back</a>
    <h1>{{$course->name}}</h1>
    <br><br>
    <div class="course-description">
        {!!$course->description!!}
    </div>
    <small>{{$course->created_at}}</small> --}}

    {{-- @if(!Auth::guest())
        @if(Auth::user()->id== $course->user_id)
            {!!Form::open(['action'=>['App\Http\Controllers\CourseController@enroll',$course->id],'method'=>'POST', 'class'=>"enroll-form"])!!}
                {{Form::submit('Enroll',['class'=>'btn btn-enroll'])}}
            {!!Form::close()!!}
        @endif
    @endif --}}

{{-- @endsection --}}