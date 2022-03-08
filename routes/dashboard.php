<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Dashboard\WelcomController;
use App\Http\Controllers\Dashboard\ChallengeController;
use App\Http\Controllers\Dashboard\LoginController;


Route::get('/dashboard/login', [LoginController::class,'index'])->name('dashboard.login.index');
Route::post('/dashboard/login', [LoginController::class,'store'])->name('dashboard.login.store');
Route::post('/dashboard/logout', [LoginController::class,'seller_logout'])->name('dashboard.logout');

Route::prefix('dashboard')->name('dashboard.')->middleware(['auth'])->group(function () {

    Route::get('/', [WelcomController::class,'index'])->name('welcome');

    // profile route
    Route::get('profile/edit', [LoginController::class,'edit'])->name('profile.edit');
    Route::put('profile/update/{user}', [LoginController::class,'update'])->name('profile.update');

    //user routes
    Route::resource('challenges', ChallengeController::class)->except(['show']);


}); //end of dashboard routes
