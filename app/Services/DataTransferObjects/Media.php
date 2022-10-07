<?php

declare(strict_types=1);

namespace App\Services\DataTransferObjects;

final class Media
{
    private function __construct(
        public readonly string $title,
        public readonly array $genre_ids,
        public readonly string $duration,
        public readonly string $poster_path,
        public readonly string $background_path
    ) {
    }

    public static function fromTMDB($media)
    {
        return new self(
            title: $media['title'] ?? $media['name'] ?? $media['original_name'] ?? '',
            genre_ids: $media['genre_ids'] ?? [],
            duration: $media['runtime'] ?? $media['number_of_seasons'] ?? $media['number_of_episodes'] ?? '',
            poster_path: $media['poster_path'] ?? '',
            background_path: $media['backdrop_path'] ?? ''
        );
    }
}
