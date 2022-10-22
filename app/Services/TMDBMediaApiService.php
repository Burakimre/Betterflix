<?php

declare(strict_types=1);

namespace App\Services;

use App\Contracts\MediaApi;
use App\Services\Concerns\BuildBaseRequest;
use App\Services\Concerns\CanSendGetRequest;
use App\Services\Concerns\CanSendPostRequest;
use App\Services\DataTransferObjects\Media;
use App\Services\DataTransferObjects\MediaRow;
use Illuminate\Support\Collection;

class TMDBMediaApiService implements MediaApi
{
    use BuildBaseRequest;
    use CanSendGetRequest;
    use CanSendPostRequest;

    public function __construct(
        private readonly string $baseUrl,
        private readonly string $apiToken,
    ) {}

    public function getPopularMovies()
    {
        return $this->getMedia('Popular Movies', '/3/movie/popular');
    }

    public function getPopularShows()
    {
        return $this->getMedia('Popular Shows', '/3/tv/popular');
    }

    public function getMoviesByGenre(string $genre)
    {
        return $this->getMedia('', '/3/discover/movie', ['with_genres' => $genre]);
    }

    public function getShowsByGenre(string $genre)
    {
        return $this->getMedia('', '/3/discover/tv', ['with_genres' => $genre]);
    }

    private function getMedia(string $title, string $url, array $parameters = [])
    {
        $response = $this->get(
            request: $this->buildRequestWithUrl($parameters),
            url: $url
        );

        if (!$response->successful()) {
            return Collection::make();
        }

        $data = $response->json()['results'];

        return MediaRow::createMediaRow($title, collect($data)->map(function($media) {
            return Media::fromTMDB($media);
        }));
    }
}