<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesmtController;
/*

Route::get('/', function () {
    return view('welcome');
});


*/



Route::resource('/', SesmtController::class);


Route::get('/success', [SesmtController::class, 'success']);
