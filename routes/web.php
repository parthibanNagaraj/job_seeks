<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/jobSeeker', [App\Http\Controllers\JobSeekerController::class, 'index'])->name('jobSeeker');
Route::get('/dashboard', [App\Http\Controllers\JobSeekerController::class, 'adminDashboard'])->name('dashboard');
Route::post('/jobSeekerSave', [App\Http\Controllers\JobSeekerController::class, 'store'])->name('jobSeekerSave');


  