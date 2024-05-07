<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::directive('src', function ($expression) {
            return "<?php echo strpos($expression, 'http://') === 0 || strpos($expression, 'https://') === 0 ? $expression : Storage::url($expression); ?>";
        });
    }
}
