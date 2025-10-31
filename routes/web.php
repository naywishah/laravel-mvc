<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\TransactionController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('Category', CategoryController::class);
Route::resource('Item', ItemController::class);
Route::resource('Transaction', TransactionController::class);