<?php

use App\Http\Controllers\Ecommerce\CartController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::post('cost', [CartController::class, 'getCourier']);
Route::get('city', [CartController::class, 'getCity']);
Route::get('district', [CartController::class, 'getDistrict']);
