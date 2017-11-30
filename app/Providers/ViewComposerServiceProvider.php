<?php

namespace App\Providers;

use App\Categorie;
use App\Product;
use App\Banner;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
    * Bootstrap the application services.
    *
    * @return void
    */
    public function boot()
    {
        view()->composer('layouts.app', function($view) {
            $categories = DB::table('categories')->orderBy('order')->get(['name', 'slug']);
            $banners = Banner::where('status', 1)->where('position', '2')->get();

            $view->with(array('categories'=> $categories, 'banners'=> $banners));
        });
    }

    /**
    * Register the application services.
    *
    * @return void
    */
    public function register()
    {
        //
    }
}
