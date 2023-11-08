<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\authController;
use Illuminate\Support\Facades\Auth;
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

// serve langsung ke login
route::get('/',[StudentController::class,'index'])->middleware('auth');


// login logout
route::get('/login',[AuthController::class, 'login'])->name('login')->middleware('guest');
route::post('/login',[AuthController::class, 'authenticating'])->middleware('guest');
route::get('/logout',[AuthController::class, 'logout'])->middleware('auth');

// crud
route::resource('/students',StudentController::class)->middleware('auth');

