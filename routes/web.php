<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InternController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('interns/{slug}', [InternController::class, 'show']);


Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('prosesLogin', [AuthController::class, 'login'])->name('prosesLogin');

Route::group(['middleware' => ['auth']], function(){
    Route::group(['middleware' => ['authLogin:admin']], function(){
        Route::get('admin', [AdminController::class, 'index'])->name('admin'); 
    });
    
    Route::group(['middleware' => ['authLogin:user']], function(){
        
    });
});
Route::view('/magang', 'intern/intern');

Route::view('detail', 'intern/detail');

Route::get('register', [AuthController::class, 'register']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
