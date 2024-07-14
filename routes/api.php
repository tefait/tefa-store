<?php

use App\Http\Controllers\Ecommerce\CartController;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
// Route::post('cost', [CartController::class, 'getCourier']);
Route::get('city', [CartController::class, 'getCity'])->name('getCity');
Route::get('district', [CartController::class, 'getDistrict'])->name('getDistrict');
Route::get('village', [CartController::class, 'getVillage'])->name('getVillage');
Route::get('product', function () {
    $data = Product::with('category')->get();

    $products = $data->map(function ($product) {
        return [
            'name' => $product->name,
            'slug' => $product->slug,
            'category' => $product->category->name,
        ];
    });

    return response()->json($products);
})->name('product.api');
