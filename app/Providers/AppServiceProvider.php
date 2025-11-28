<?php

namespace App\Providers;

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
        // PENTING: Untuk mengatasi masalah Mixed Content saat menggunakan HTTPS/Proxy (seperti ngrok).
        // Baris ini akan memastikan semua aset (asset(), @vite, url()) akan menggunakan skema HTTPS.
        if (config('app.env') !== 'local') { 
            URL::forceScheme('https');
        }
    }
}
