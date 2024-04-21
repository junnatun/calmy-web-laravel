<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('signin', [LandingController::class, 'signin'])->name('landing.signin');
Route::get('signup', [LandingController::class, 'signup'])->name('landing.signup');
Route::resource('/', LandingController::class);
