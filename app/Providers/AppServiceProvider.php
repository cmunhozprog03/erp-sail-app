<?php

namespace App\Providers;

use App\Models\{
    Category,
    Subcategory
};
use App\Observers\{
    CategoryObserver,
    SubcategoryObserver
};
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

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
        Paginator::useBootstrap();
        Category::observe(CategoryObserver::class);
        Subcategory::observe(SubcategoryObserver::class);
    }
}
