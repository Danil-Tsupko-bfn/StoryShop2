<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
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

        App::setLocale(Session::get('locale', config('app.locale')));
        // Filament::serving(function () {
        //     // Using Vite
        //     Filament::registerViteTheme('resources/css/filament.css');
        // });
    }
}
