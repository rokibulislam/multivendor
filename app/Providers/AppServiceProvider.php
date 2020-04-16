<?php

namespace App\Providers;

use App\Observers\UserObserver;
use App\User;
use App\Observers\ProductObserver;
use App\Product;
use App\Observers\CategoryObserver;
use App\Category;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
         User::observe(UserObserver::class);
         Product::observe(ProductObserver::class);
         Category::observe(CategoryObserver::class);
    }
}
