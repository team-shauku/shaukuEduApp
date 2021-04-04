@extends('layout.new_app')


@section('content')
<link href="{{ asset('css/student.css') }}" rel="stylesheet">
    <div class="nav-left-sidebar sidebar-light" style="background-color:slateblue">
        <div class="navbar ">
            <ul>
                <li><a href="{{route('show_courses', $student_id->id)}}">Your Courses</a></li>
            </ul>
        </div>
    </div>

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
                        <li class="breadcrumb-item active" aria-current="page">Study</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>


{{-- return course pdf viewer or video --}}

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