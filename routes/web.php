<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/entries/create', [App\Http\Controllers\EntryController::class, 'create']);

Route::post('/entries/create', [App\Http\Controllers\EntryController::class, 'store']);
