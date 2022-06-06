<?php

use Illuminate\Support\Facades\Route;

//User logged out
Route::get('/', function () { return view('welcome');});

//User logged in
Route::group(['middleware' => 'auth'], function() {
    Route::get('dashboard', function () { return view('dashboard');} )->name('dashboard');
});

//Admin logged in
Route::group(['middleware' => 'admin'], function() {
    Route::resource('users', \App\Http\Controllers\UserController::class);
});

require __DIR__.'/auth.php';
