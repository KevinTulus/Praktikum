<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\GuruController;

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

//Homepage
Route::view('/', 'homepage.index');
Route::view('/tentang', 'homepage.tentang.tentang');
Route::view('/berita', 'homepage.berita.berita');
//Route::view('/akademik', 'homepage.akademik.akademik');
Route::view('/acara', 'homepage.acara.acara');
route::view('/guru', 'homepage.admin.guru');

//Portal
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/guru', [App\Http\Controllers\GuruController::class, 'index'])->name('guru');
Route::get('/guru/search',[App\Http\Controllers\GuruController::class, 'search']);

//Portal++
Route::view('/dashboard', 'portal.pages.dashboard');
Route::view('/table', 'portal.pages.table');
//Route::view('/profile', 'portal.pages.profile');

route::group(['middleware' => 'auth'], function() {
    Route::get('/akademik', [App\Http\Controllers\AcademicController::class, 'index']);
    Route::resource('profile', App\Http\Controllers\ProfilController::class);
    Route::resource('student', App\Http\Controllers\StudentController::class);
    Route::resource('teacher', App\Http\Controllers\TeacherController::class);
    Route::resource('job', App\Http\Controllers\JobController::class);
    Route::resource('nilai', App\Http\Controllers\NilaiController::class);
    Route::resource('post', App\Http\Controllers\PostController::class);
    Route::resource('comment', App\Http\Controllers\CommentController::class);
    //Route::get('/search', [App\Http\Controllers\TeacherController::class, 'search']);
});