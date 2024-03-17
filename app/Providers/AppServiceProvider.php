<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Department;
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
        view()->composer('*', function ($view) {
            $sections = Department::all();
            $categories= Category::all();
            $view->with('sections', $sections)->with('categories', $categories);
        });
    }
}
