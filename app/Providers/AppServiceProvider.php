<?php

namespace App\Providers;

use App\Models\Categories;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
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
        if (Schema::hasTable('categories')) {
            $categories = Categories::all(); // Use `all()` for clarity
            View::share('categories', $categories);
        }
    }
}
