<?php
// use Auth;php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();
// Auth::routes(['register' => false]);
Auth::routes(['home' => false]);
Route::get('create_user', [App\Http\Controllers\Auth\RegisterController::class, 'getUserDetails'])->name('registration');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/upload-course', [App\Http\Controllers\CourseController::class, 'createForm'])->name('create_course');

Route::post('/upload-course', [App\Http\Controllers\CourseController::class, 'courseUpload'])->name('courseUpload');
Route::get('/teacher', [App\Http\Controllers\TeacherController::class, 'index'])->middleware('teacher');
Route::get('/student', [App\Http\Controllers\StudentController::class, 'index'])->middleware('student');;
Route::get('/index', [App\Http\Controllers\IndexController::class,'index'])->name('index');