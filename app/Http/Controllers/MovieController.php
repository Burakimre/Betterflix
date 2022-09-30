<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    public function home()
    {
        $rows = collect();

        $rows->push([
            'title' => 'Movies',
            'media' => Http::get('https://api.themoviedb.org/3/movie/popular?api_key=' . env('TMDB_APP_KEY'))->json()['results']
        ]);
        $rows->push([
            'title' => 'Series',
            'media' => Http::get('https://api.themoviedb.org/3/tv/popular?api_key=' . env('TMDB_APP_KEY'))->json()['results']
        ]);

        return view('home', ['rows' => $rows]);
    }
}
