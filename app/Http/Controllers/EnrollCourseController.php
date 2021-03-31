<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnrollCourseController extends Controller
{
    //
    function index(){
        return view('pages.enroll_course');
    }
}
