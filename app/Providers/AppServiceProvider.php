<?php

namespace App\Providers;

use App\Models\Categorie;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Route;
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

        Route::middleware('web') // `web` middleware, same as `web.php`
        ->group(base_path('routes/admin.php'));



        Paginator::useBootstrapFive();
        
        view()->composer('frontend.frontend_layout/frontend_layouts',function($view){
            $view->with('categorie',Categorie::with('subcatagories')->latest()->get());
        });
    }
}
