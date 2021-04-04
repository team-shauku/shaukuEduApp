<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use App\Models\CourseLevel;
use App\Models\CourseCategory;
use App\Models\Enrolled;
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
        $courses=Course::where('category_id',$category_id)->where('level_id',$course_level)->get();
        $course_levels=CourseLevel::where('id',$course_level)->get();
        $course_categories=CourseCategory::where('id',$category_id)->get();
        return view('student.student',compact('student_id','courses','course_levels','course_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data)
    {
        //add users who have enrolled
     
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
        // return Enrolled::create([
        //     'studentname' => $data['studentname'],
        //     'coursename' => $data['course'],
        //     'category_id' => $data['course_category'],
        //     'level_id' => $data['course_level'],
        // ]);
        return redirect()->route('study_course')->with('message','Enrollment successful');
        
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
        return view('student.enrolled_courses',compact('student_id','message'))->with('i');
    }

    public function showCourse(Course $id)
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
