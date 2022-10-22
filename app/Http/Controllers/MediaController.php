<?php

namespace App\Http\Controllers;

use App\Contracts\MediaApi;

class MediaController extends Controller
{
    public function __construct(protected MediaApi $mediaApi) {}

    public function getPopularMovies(MediaApi $mediaApi)
    {
        return $mediaApi->getPopularMovies();
    }

    public function getPopularShows(MediaApi $mediaApi)
    {
        return $mediaApi->getPopularShows();
    }

    public function getMoviesByGenre()
    {
        
    }
}
