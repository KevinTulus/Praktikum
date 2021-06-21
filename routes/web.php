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
Route::view('/akademik', 'homepage.akademik.akademik');
Route::view('/acara', 'homepage.acara.acara');
route::view('/guru', 'homepage.admin.guru');

//Portal
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
<<<<<<< HEAD
Route::view('/dashbaord', 'portal.pages.dashbaord');
Route::view('/table', 'portal.pages.table');
Route::view('/profile', 'portal.pages.profile');

//??
Route::get('/guru', [App\Http\Controllers\TeacherController::class, 'index'])->name('guru');
=======
Route::get('/guru', [App\Http\Controllers\GuruController::class, 'index'])->name('guru');
Route::get('/guru/search',[App\Http\Controllers\GuruController::class, 'search']);
>>>>>>> 42a0534139f89640f20a433ac2b71f23e157bbb1
