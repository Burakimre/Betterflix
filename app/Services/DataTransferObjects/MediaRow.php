<?php

declare(strict_types=1);

namespace App\Services\DataTransferObjects;

use Illuminate\Support\Collection;

final class MediaRow
{
    private function __construct(
        public readonly string $title,
        public readonly Collection $medias
    ) {}

	public static function createMediaRow($title, $medias)
	{
		return response()->json([
			'title' => $title,
			'medias' => $medias
		]);
	}
}
