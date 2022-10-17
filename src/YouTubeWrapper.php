<?php

namespace LaravelApi\YouTube;

use Alaouy\Youtube\Facades\Youtube;

class YouTubeWrapper
{
    // public $faker = YouTubeWrapperFaker::class;

    public function config()
    {
        return [
            'YOUTUBE_API_KEY' => [
                'config' => 'services.youtube.api-key',
                'description' => 'API key for YouTube',
            ],
        ];
    }

    public function __call($name, $attributes)
    {
        return Youtube::$name(...$attributes);
    }
}
