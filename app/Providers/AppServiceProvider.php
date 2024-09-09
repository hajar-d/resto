<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Commande; // Adjust the model name to your actual Command model


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
    public function boot()
{
    // Use View::composer to share data with specific or all views
    View::composer('*', function ($view) { // Use '*' to share with all views or specify the view like 'layouts.nav'
        $commandCount = 0;

        // Check if user is authenticated
        if (Auth::check()) {
            // Get the number of commands for the authenticated user
            $commandCount = Commande::where('user_id', Auth::id())->count();
        }

        // Share the count with all views
        $view->with('commandCount', $commandCount);
    });
}
}
