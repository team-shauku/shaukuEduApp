<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{config('app.name', 'ShaukuEduApp')}}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
    <link href="{{ 'css/teacher.css' }}" rel="stylesheet"> 
    <link href="{{ 'css/student.css' }}" rel="stylesheet"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    {{-- Script --}}
    
    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src = "https://kit.fontawesome.com/282530808e.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="js/jquery.printPage.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    
 
    </head>
<body>
    <div id="app">
        @include('include.navbar')
            {{-- @include('include.navbar')
            @include('include.message') --}}
        <div>
            {{-- <div id=""></div> --}}
            @yield('content')
            @yield('scripts')
         </div> 
    </div>
</body>
</html>
