@extends('layouts.new_app')
@section('content')
<div class="nav-left-sidebar sidebar-light" style="background-color:rgba(240, 196, 240, 0.5)">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> 
            {{-- <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        <h3 style="color: wheat">Menu</h3>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard</a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{route('home')}}" ><i class="fa fa-fw fa-user-circle"></i>General Dashboard</a>
                    </li>
                    
                </ul>
            </div> --}}
        </nav>
    </div>
</div>
    <!-- ============================================================== -->
    <!-- end left sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <!-- ============================================================== -->
                <!-- pageheader  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Teacher's Dashboard</h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Course Management </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ecommerce-widget"></div>
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class=""></h5>
                                    <div class="metric-value d-inline-block">
                                        <a class="mb-1" href=""><img src="assets/img/teacher.png" alt="" width="100px" height="100%"></a>
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
                                                <a class="mb-1" href="{{route('create_course')}}"><img src="assets/img/add.png" alt="" width="50px" height="60px"></a>
                                            </div>
                                        </div>
                                        <div id="sparkline-revenue"></div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="card">
                                        <div class="card-body" >
                                            <h5 class="">Number of enrolled students</h5>
                                            <div class="metric-value d-inline-block">
                                                <h1 class="mb-1"></h1>
                                                    
                                            </div>
                                            
                                        </div>
                                        <div id="sparkline-revenue2"></div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class>Number of Courses created</h5>
                                            <div class="metric-value d-inline-block">
                                                <h1 class="mb-1">0</h1>
                                            </div>
                                           
                                        </div>
                                        <div id="sparkline-revenue3"></div>
                                    </div>
                                </div>
                                
                       
                <!-- ============================================================== -->
                <!-- end pageheader  -->
                <!-- ============================================================== -->
                       <!-- ============================================================== -->

                        <!-- ============================================================== -->

                           


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
        <!-- ============================================================== -->
        <!-- end footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end wrapper  -->
    <!-- ============================================================== -->
</div>

@endsection