<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomController;

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

Route::get('/', [WelcomController::class,'index'])->name('welcome');
Route::get('/challenges', [WelcomController::class,'challenges'])->name('challenges');
Route::get('/challenges/task/{challenges}', [WelcomController::class,'task'])->name('challenges.task');
