<?php

use Illuminate\Support\Facades\Route;

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

//Portal
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('/dashbaord', 'portal.pages.dashbaord');
Route::view('/table', 'portal.pages.table');
Route::view('/profile', 'portal.pages.profile');

//??
Route::get('/guru', [App\Http\Controllers\TeacherController::class, 'index'])->name('guru');