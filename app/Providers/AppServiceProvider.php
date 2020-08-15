<?php

namespace App\Providers;

use App\Models\Admin\Category;
use App\Models\Admin\Product;
use App\Observers\AdminCategoryObserver;
use App\Observers\AdminProductObserver;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function register()
    {

    }
    public function boot()
    {
        Schema::defaultStringLength(191);
        date_default_timezone_set('Etc/GMT+3');
        Category::observe(AdminCategoryObserver::class);
        Product::observe(AdminProductObserver::class);
    }
}
