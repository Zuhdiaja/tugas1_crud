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

route::get('/',function(){
    return view('home');
});

route::get('/students',[StudentController::class,'index']);


// login logout
route::get('/login',[AuthController::class, 'login'])->name('login')->middleware('guest');
route::post('/login',[AuthController::class, 'authenticating'])->middleware('guest');
route::get('/logout',[AuthController::class, 'logout'])->middleware('auth');



// crud
// route::resource('/students',StudentController::class)->middleware('auth');

route::get('/students',[StudentController::class,'index']);
route::get('/students-add',[StudentController::class, 'create'])->middleware('auth');
route::post('/students',[StudentController::class,'store'])->middleware('auth');
route::get('/students/{id}',[StudentController::class, 'show'])->middleware('auth');
route::get('/students-edit/{id}',[StudentController::class, 'edit'])->middleware('auth');
route::put('/students/{id}',[StudentController::class, 'update'])->middleware('auth');
route::delete('/students/{id}',[StudentController::class, 'destroy'])->middleware('auth');



