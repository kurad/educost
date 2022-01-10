<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\QAController;


Route::get('/', function () {
    return view('Varsity.index');
});

Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard')->middleware('admin');
Route::get('/admin/levels', [AdminController::class, 'levels'])->name('levels')->middleware('admin');
Route::post('/admin/create_level', [AdminController::class, 'create_level'])->name('create_level')->middleware('admin');
Route::get('/admin/show_create_level',[AdminController::class, 'show_create_level'])->name('show_create_level')->middleware('admin');
//---------------------------------------------------------------------------------------------------------------
Route::get('/admin/subjects', [AdminController::class, 'subjects'])->name('subjects')->middleware('admin');
Route::post('/admin/create_subject', [AdminController::class, 'create_subject'])->name('create_subject')->middleware('admin');
Route::get('/admin/show_create_subject',[AdminController::class, 'show_create_subject'])->name('show_create_subject')->middleware('admin');
//--------------------------------------------------------------Units--------------------------------

Route::get('/admin/units', [AdminController::class, 'units'])->name('units')->middleware('admin');
Route::post('/admin/create_unit', [AdminController::class, 'create_unit'])->name('create_unit')->middleware('admin');
Route::get('/admin/show_create_unit',[AdminController::class, 'show_create_unit'])->name('show_create_unit')->middleware('admin');

//------------------------------------------------Lessons--------------------------------

Route::get('/admin/lessons', [AdminController::class, 'lessons'])->name('lessons')->middleware('admin');
Route::post('/admin/create_lesson', [AdminController::class, 'create_lesson'])->name('create_lesson')->middleware('admin');
Route::get('/admin/show_create_lesson',[AdminController::class, 'show_create_lesson'])->name('show_create_lesson')->middleware('admin');

//----------------------------------------------Lessons Video--------------------------------

Route::get('/admin/lesson/video', [AdminController::class, 'video_lesson'])->name('video_lesson')->middleware('admin');
Route::post('/admin/lesson/create_video_lesson', [AdminController::class, 'create_video_lesson'])->name('create_video_lesson')->middleware('admin');
Route::get('/admin/lesson/show_create_video_lesson',[AdminController::class, 'show_create_video_lesson'])->name('show_create_video_lesson')->middleware('admin');


Route::get('logout', [App\Http\Controllers\HomeController::class,'logout']);
Route::get('/profile', [App\Http\Controllers\HomeController::class,'profile']);
Route::get('/teacher/dashboard', [App\Http\Controllers\TeacherController::class, 'dashboard'])->name('teacher_dashboard')->middleware('teacher');
/*
Route::group(['prefix'=>'admin','middleware'=>['admin','auth']],function(){
        Route::get('dashboard',[AdminController::class,'index'])->name('master.dashboard');
        //Route::get('profile',[AdminController::class,'profile'])->name('master.profile');
        //Route::get('setting',[AdminController::class,'settings'])->name('master.settings');
});
*/

Route::get('video/videos',[VideoController::class, 'videos'])->name('videos')->middleware('admin');
Route::get('video/show_create_video',[VideoController::class, 'index'])->name('show_create_video')->middleware('admin');
Route::post('video/create_video',[VideoController::class, 'create_video'])->name('create_video')->middleware('admin');

Route::get('getSubjects',[HomeController::class, 'getSubjects'])->name('getSubjects');
Route::get('getUnits',[HomeController::class, 'getUnits'])->name('getUnits');
Route::get('getLessons',[HomeController::class, 'getLessons'])->name('getLessons');

Route::get('video/view_video_lesson/{id}',[VideoController::class, 'view_video_lesson'])->name('view_video_lesson')->middleware('admin');
Route::get('questions/all_question',[VideoController::class, 'questions'])->name('all_questions')->middleware('admin');

Route::get('questions/show_create_question',[VideoController::class, 'show_create_question'])->name('show_create_question')->middleware('admin');
Route::post('questions/create_question',[VideoController::class, 'create_question'])->name('create_question')->middleware('admin');
Route::get('video/view_question/{id}',[VideoController::class, 'view_question'])->name('view_question')->middleware('admin');

Route::get('questions/show_create_answer/{id}',[VideoController::class, 'show_create_answer'])->name('show_create_answer')->middleware('admin');
Route::post('questions/store_answer',[VideoController::class, 'store_answer'])->name('store_answer')->middleware('admin');


Route::get('teacher/questions/all_question',[TeacherController::class, 'questions'])->name('teacher.all_questions')->middleware('teacher');