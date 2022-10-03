<?php

namespace App\Contracts;

interface MovieApi
{
    public function fetchPopularMovies();
    public function fetchPopularShows();
}