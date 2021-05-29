<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dosenController;
use App\Http\Controllers\homeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

route::get('/', [homeController::class, 'index']);
route::get('/dosen', [dosenController::class, 'index']);
Route::get('/index', function () {
     return view('home');
 });