<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;



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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function () {
    return view('login');
});
Route::get('/loginm', function () {
    return view('loginm');
});
Route::get('/mprofile', function () {
    return view('mprofile');
});


Route::resource('admin',AdminController::class);
Route::resource('products',ProductController::class);
Route::resource('user',UserController::class);
Route::resource('order',OrderController::class);

Route::post('/login',[LoginController::class,'checklogin'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::get('/register',[UserController::class,'register'])->name('reg');
Route::get('/',[LoginController::class,'login'])->name('start');

Route::post('/loginm',[LoginController::class,'checklogin'])->name('loginm');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::get('/register',[UserController::class,'register'])->name('reg');
Route::get('/',[LoginController::class,'login'])->name('start');

Route::get('/index/{product}',[OrderController::class,'index'])->name('ord');
Route::get('/order',[ProductController::class,'index1'])->name('order');
Route::get('/customer',[AdminController::class,'customer'])->name('customer');
Route::get('/employee',[AdminController::class,'employee'])->name('employee');


//Route::resource('example',CustomerController::class);
Route::get('/menu', function () {
    return view('example.menu');
});
Route::get('/dprofile', function () {
    return view('customer.dprofile');
});

Route::get('/dprofile1', function () {
    return view('customer.dprofile1');
});

Route::get('/drequest', function () {
    return view('customer.drequest');
});
Route::get('/drequest1', function () {
    return view('drequest1');
});

Route::get('/mrequest', function () {
    return view('mrequest');
});

Route::get('/meeting', function () {
    return view('meeting');
});

Route::get('/mmeeting', function () {
    return view('mmeeting');
});

Route::get('/summary', function () {
    return view('summary');
});
Route::get('/mcreate', function () {
    return view('mcreate');
});
Route::get('/msummary', function () {
    return view('msummary');
});
