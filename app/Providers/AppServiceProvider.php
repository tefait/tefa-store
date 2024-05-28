<?php

namespace App\Providers;

use App\Http\View\CategoryComposer;
use App\Models\Customer;
use App\Models\Order;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
    }

    public function boot(): void
    {
        Blade::directive('src', function ($expression) {
            return "<?php echo strpos($expression, 'http://') === 0 || strpos($expression, 'https://') === 0 ? $expression : Storage::url($expression); ?>";
        });
        Paginator::useBootstrapFive();
        Gate::define('order-view', function (Customer $customer, Order $order) {
            return $customer->id == $order->customer_id;
        });
        View::composer('ecommerce.*', CategoryComposer::class);
    }
}
