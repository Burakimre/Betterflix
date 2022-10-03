<?php

namespace App\Providers;

use App\Services\TMDBMovieApi;
use GuzzleHttp\Client;
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
        $this->app->bind(Newsletter::class, function () {
            $base_uri = 'https://api.themoviedb.org/';
            $client = new Client([
                'base_uri' => $base_uri,
                'api_key' => config('services.tmdb.key')
            ]);

            return new TMDBMovieApi($client);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
