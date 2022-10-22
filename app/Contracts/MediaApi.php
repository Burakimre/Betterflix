<?php

namespace App\Contracts;

interface MediaApi
{
    public function getPopularMovies();
    public function getPopularShows();
    public function getMoviesByGenre(string $genre);
    public function getShowsByGenre(string $genre);
}