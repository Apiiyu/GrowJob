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

Route::get('magang', [InternController::class, 'index']);

Route::get('magang/create', [InternController::class, 'create']);
Route::post('magang/store', [InternController::class, 'store']);


Route::get('magang/{Intern}', [InternController::class, 'show']);


Route::view('detail', 'intern/detail');

Route::get('registrasi', [AuthController::class, 'register']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('apply', 'intern.apply');