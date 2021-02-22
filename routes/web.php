<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InternController;
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
    return view('index');
});

Route::get('interns/{slug}', [InternController::class, 'show']);

Route::view('/magang', 'intern/intern');
Route::view('login', 'login/login');
Route::view('detail', 'intern/detail');
Route::view('register', 'login/register');
