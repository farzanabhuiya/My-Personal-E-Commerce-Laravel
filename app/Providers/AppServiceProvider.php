<?php

namespace App\Providers;

use App\Models\Categorie;
use Illuminate\Pagination\Paginator;
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
        Paginator::useBootstrapFive();
        
        view()->composer('frontend.frontend_layout/frontend_layouts',function($view){
            $view->with('categorie',Categorie::with('subcatagories')->latest()->get());
        });
    }
}
