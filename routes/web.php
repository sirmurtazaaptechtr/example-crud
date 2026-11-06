<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/customers', [CustomerController::class,'index']);
Route::get('/categories', [CategoryController::class,'index']);