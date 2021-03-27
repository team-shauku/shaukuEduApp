<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
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
        return view('create_courses'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    
        public function createForm(){
            // dd(Auth::user()->id);
          return view('create_course');
        }
      
        public function CourseUpload(Request $req){
              $req->validate([
              'file' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
              ]);
      
              $fileModel = new Course;
      
              if($req->file()) {
                  $fileName = time().'_'.$req->file->getClientOriginalName();
                  $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');
      
                  $fileModel->name = time().'_'.$req->file->getClientOriginalName();
                  $fileModel->course_path = '/storage/' . $filePath;
                  $fileModel->description = $req->input('description');
                  $fileModel->category_id = $req->input('category');
                 
                  $fileModel->level_id = $req->input('level');
                  $fileModel->teacher_id = Auth::user()->id;
                  $fileModel->save();
                  
      
                  return back()
                  ->with('success','File has been uploaded.')
                  ->with('file', $fileName);
              }
         }
      
      
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
