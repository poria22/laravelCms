<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Category;
class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $categories=Category::with('children')->where('category_id',null)->get();

        View::composer('layouts.app',function ($view) use ($categories){
            $view->with('categories',$categories);
        });
    }
}
