<?php

use Illuminate\Support\Facades\Route;

//User logged out
Route::get('/', function () { return view('welcome');});

//User logged in
Route::group(['middleware' => 'auth'], function() {
    Route::get('dashboard', function () { return view('dashboard');} )->name('dashboard');
    Route::view('profile', 'profile')->name('profile');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});

//Admin logged in
Route::group(['middleware' => 'admin'], function() {
    Route::resource('users', \App\Http\Controllers\UserController::class);
    Route::get('getallusers', [\App\Http\Controllers\UserController::class, 'getAllUsers']);
    Route::get('download-pdf', [\App\Http\Controllers\UserController::class, 'downloadPDF'])->name('download-pdf');
});

require __DIR__.'/auth.php';
