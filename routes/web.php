<?php

use Illuminate\Support\Facades\Route;

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/create', [ProductController::class, 'create']);
Route::get('/products/{id}/edit', [ProductController::class, 'edit']);

Route::get('/', function () {
    return view('welcome');
});
