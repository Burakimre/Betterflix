<?php

declare(strict_types=1);

namespace App\Services;

use App\Contracts\MediaApi;
use App\Services\Concerns\BuildBaseRequest;
use App\Services\Concerns\CanSendGetRequest;
use App\Services\Concerns\CanSendPostRequest;
use App\Services\DataTransferObjects\Media;

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
        $data = $this->get(
            request: $this->buildRequestWithUrl(),
            url: '/3/movie/popular'
        )->json()['results'];

        return collect($data)->map(function($media) {
            return Media::fromTMDB($media);
        });
    }

    public function getPopularShows()
    {
        $data = $this->get(
            request: $this->buildRequestWithUrl(),
            url: '/3/tv/popular'
        )->json()['results'];

        return collect($data)->map(function($media) {
            return Media::fromTMDB($media);
        });
    }
}