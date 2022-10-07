<?php

namespace App\Contracts;

interface MediaApi
{
    public function getPopularMovies();
    public function getPopularShows();
}