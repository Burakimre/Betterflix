<?php

namespace App\Providers;

use App\Contracts\MediaApi;
use App\Services\TMDBMediaApiService;
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
        $this->app->singleton(
            abstract: MediaApi::class,
            concrete: fn () => new TMDBMediaApiService(
                baseUrl: config('services.tmdb.url'),
                apiToken: config('services.tmdb.token')
            )
        );
    }
}
