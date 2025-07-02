<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\MenuItem;
use Illuminate\Support\Facades\View;

class ViewComposerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        View::composer('frontend.*', function ($view) {
            $food_categories = MenuItem::distinct()->pluck('category');
            $view->with('food_categories', $food_categories);
        });
    }
}