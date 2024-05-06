<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfileController;
use App\Models\Produk;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts/app');
});

Route::get('/api/products', function () {
    return response()->json(Produk::all()) ;
})->name('product.api');

Route::get('/dashboard', function () {
    return view('development.dashboard', ['produks' => Produk::where('id', 1)->get()]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Can be accessed only by admin
Route::middleware(['auth'
// , 'admin'

])->group(function () {
    // Produk Routes
    Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk.create');
    Route::post('/produk/create', [ProdukController::class, 'store'])->name('produk.store');
    Route::get('/produk/{produk}/edit', [ProdukController::class, 'edit'])->name('produk.edit');
    Route::get('/produk/{produk}/update', [ProdukController::class, 'update'])->name('produk.update');

    Route::delete('/produk/{produk}/delete', [ProdukController::class, 'destroy'])->name('produk.destroy');
    // Pesanan Routes
    Route::post('/pesanan/{pesanan}/confirm', [PesananController::class, 'confirm_payment'])->name('confirm_payment');
    Route::post('/pesanan/{pesanan}/reject', [PesananController::class, 'reject_payment'])->name('reject_payment');
  });
  // Can be accessed by authenticated code
  Route::middleware('auth')->group(function () {
    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Cart soutes
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::patch('/cart/{cart}', [CartController::class, 'update_cart'])->name('update.cart');
    Route::post('/action/cart/add/{produk}', [CartController::class, 'addToCart'])->name('add.to.cart');
    Route::delete('/action/cart/delete/{cart}', [CartController::class, 'destroy'])->name('destroy.cart');

    // Pesanan routes
    Route::post('/action/checkout', [PesananController::class, 'checkout'])->name('checkout');
    Route::post('/pesanan/{pesanan}/pay', [PesananController::class, 'store_receipt'])->name('store_receipt');
    Route::get('/pesanan/{pesanan}', [PesananController::class, 'show'])->name('show_pesanan');
    Route::get('/pesanan/nota/{pesanan}', [PesananController::class, 'nota'])->name('nota');
    Route::get('/pesanan', [PesananController::class, 'index'])->name('pesanan.index');
    // Produk Routes

    Route::get('/produk/{produk}', [ProdukController::class, 'show'])->name('produk.show');
  });


require __DIR__.'/auth.php';

