<?php

namespace App\Services;
use SpotifyWebAPI\SpotifyWebAPI;

class SpotifyService
{
    protected SpotifyWebAPI $api;

    public function __construct()
    {
        $this->api = new SpotifyWebAPI();
        $this->api->setAccessToken($this->getAccessToken());
    }

    protected function getAccessToken()
    {
        $session = new \SpotifyWebAPI\Session(
            config('spotify.client_id'),
            config('spotify.client_secret'),
            config('spotify.redirect_uri')
        );

        // Replace with the appropriate redirect URI for your app
        $options = [
            'scope' => 'user-read-private user-read-email',
        ];

        return $session->getAccessToken($options);
    }
}
