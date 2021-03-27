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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/create_course', [App\Http\Controllers\CourseController::class, 'index']);

Route::get('/upload-course', [App\Http\Controllers\CourseController::class, 'createForm']);

Route::post('/upload-course', [App\Http\Controllers\CourseController::class, 'courseUpload'])->name('courseUpload');
