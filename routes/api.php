<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::post('/products', [ApiController::class, 'storeProduct']);
Route::post('/orders', [ApiController::class, 'storeOrder']);
Route::get('/products/{id}', [ApiController::class, 'order']);
