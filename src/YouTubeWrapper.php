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

    /**
     * Get info for a video
     */
    public function getVideoInfo(string $videoId)
    {

    }

    /**
     * Get activities for channel
     *
     * Get channel activities by channel ID, return an array of PHP objects
     */
    public function getActivitiesByChannelId(string $channelId)
    {

    }

    public function __call($name, $attributes)
    {
        dump('API Call to ' . (new \ReflectionClass($this))->getShortName() . ' -> ' . $name);
    }
}
