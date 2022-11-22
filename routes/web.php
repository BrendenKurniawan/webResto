<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\HomeController;
use App\Models\User;

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
    return view('welcome');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/cf_room', function () {
    return view('cf_room');
});
Route::get('/quality', function () {
    return view('quality');
});
Route::get('/order', function () {
    return view('order');
});
Route::get('/chat', function () {
    return view('chat');
});

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::post('/home', [HomeController::class, 'upload'])->name('home');
    // Route::post('/manager/home', [HomeController::class, 'upload'])->name('manager.home');
    // Route::post('/pegawai/home', [HomeController::class, 'upload'])->name('pegawai.home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::post('/admin/home', [HomeController::class, 'upload'])->name('admin.home');
    Route::get('/admin/profile', [HomeController::class, 'adminProfile'])->name('admin.profile');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
  
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
    Route::post('/manager/home', [HomeController::class, 'upload'])->name('manager.home');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:pegawai'])->group(function () {
  
    Route::get('/pegawai/home', [HomeController::class, 'pegawaiHome'])->name('pegawai.home');
    Route::post('/pegawai/home', [HomeController::class, 'upload'])->name('pegawai.home');
});
