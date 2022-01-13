<?php

namespace LaravelApi\YouTube;

class YouTubeWrapper
{
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
        dump('API Call to ' . (new \ReflectionClass($this))->getShortName() . ' -> ' . $name);
    }
}
