<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesmtController;


Route::resource('/', SesmtController::class);


Route::get('/sucesso', [SesmtController::class, 'success']);

Auth::routes();

Route::get('/dasboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
