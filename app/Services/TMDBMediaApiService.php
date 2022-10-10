<?php

declare(strict_types=1);

namespace App\Services;

use App\Contracts\MediaApi;
use App\Services\Concerns\BuildBaseRequest;
use App\Services\Concerns\CanSendGetRequest;
use App\Services\Concerns\CanSendPostRequest;
use App\Services\DataTransferObjects\Media;
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
        $response = $this->get(
            request: $this->buildRequestWithUrl(),
            url: '/3/movie/popular'
        );

        if (!$response->successful()) {
            return Collection::make();
        }

        $data = $response->json()['results'];

        return collect($data)->map(function($media) {
            return Media::fromTMDB($media);
        });
    }

    public function getPopularShows()
    {
        $response = $this->get(
            request: $this->buildRequestWithUrl(),
            url: '/3/tv/popular'
        );

        if (!$response->successful()) {
            return Collection::make();
        }

        $data = $response->json()['results'];

        return collect($data)->map(function($media) {
            return Media::fromTMDB($media);
        });
    }
}