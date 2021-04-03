<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        // get student id
        $student=auth()->user()->id;
        $student_id=User::find($student);
        $category_id=$student_id->category_id;
        $course_level=$student_id->level_id;
        
        // $course_id=$student->category_id;
        // $courses=Course::where('category_id',$course_id)->orderBy('created_at','desc')->take(5)->get();
        // return view('student.student',compact('student_id','courses'));
        return view('student.student',compact('student_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // enroll student for course

        return redirect()->route('study_course')->with();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $id)
    {
        // return view of courses enrolled by student
        $student_id=User::find($id);
        $message="Your registered courses will appear here";
        return view('student.enrolled_courses',compact('student_id','message'));
    }

    public function showCourse()
    {
        // Course $id
        // View more details about course
        // $course_id=User::find($id);
        // return view('student.view_course', compact('course_id'));
        return view('student.view_course');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        // $course->delete();
        // return redirect()->route('show_courses')->with('success', 'Student deleted successfully');
    }

    public function studyCourse(Course $course)
    {
        return view('student.study_course');
    }
}
