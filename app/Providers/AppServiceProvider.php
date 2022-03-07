<?php

namespace App\Providers;

use App\Mebel;
use App\MebelCategory;
use App\MebelType;
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
        view()->composer(['shop/product_details','shop/product_category'],function ($view){
            $view->with('top',Mebel::query()->orderByDesc('created_at')->limit(12)->get());
        });
        view()->composer('shop/product_category',function ($view){
           $view->with('category',MebelCategory::query()->withCount('mebels')->get()) ;
        });
        view()->composer('shop/product_category',function ($view){
           $view->with('type',MebelType::query()->withCount('mebels')->get()) ;
        });
    }
}
