<?php

namespace App\Services;

use App\Contracts\MovieApi;
use GuzzleHttp\Client;

class TMDBMovieApi implements MovieApi
{
    public function __construct(protected Client $client)
    {
        //
    }

    public function fetchPopularMovies()
    {
        return $this->client->request('GET', '/3/movie/popular');
    }

    public function fetchPopularShows()
    {
        
    }
}