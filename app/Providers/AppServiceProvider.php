<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Faker\Factory as FakerFactory; // Tambahkan ini
use Faker\Generator as FakerGenerator; // 
use Illuminate\Database\Eloquent\Model;

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
        // Untuk mencegah penggunaan Lazy Loading
        Model::preventLazyLoading();
        // Tambahkan konfigurasi Faker untuk menggunakan lokal Indonesia
        $this->app->singleton(FakerGenerator::class, function () {
            return FakerFactory::create('id_ID');
        });
    }
}
