<?php

namespace App\Providers;

use App\Http\Controllers\Ecommerce\CartController;
use App\Http\View\CategoryComposer;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Setting;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

use function Laravel\Prompts\error;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
    }

    public function boot(): void
    {
        try {
            cache()->rememberForever(
                'settings',
                fn () => Setting::all()->keyBy('key'),
            );
        } catch (\Throwable $th) {
            error('The settings table does not exist.');
        }

        if (! empty(env('NGROK_URL'))) {
            URL::forceScheme('https');
            $this->app['url']->forceRootUrl(env('NGROK_URL'));
        }
        Gate::define('order-view', function (Customer $customer, Order $order) {
            return $customer->id == $order->customer_id;
        });
        View::composer('ecommerce.*', CategoryComposer::class);
        View::share('', CartController::getCarts());

        if (! empty(env('NGROK_URL'))) {
            $this->app['url']->forceRootUrl(env('NGROK_URL'));
        }
    }
}
