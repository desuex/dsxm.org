<?php

namespace App\Services;
use App\Facades\LastFm;
use GuzzleHttp\Client;

class LastFmService
{
    protected $httpClient;

    public function __construct(Client $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function getInfoByTrackName(string $trackName, string $artist)
    {
        $apiKey =  config('lastfm.api_key');
        $apiUrl = 'http://ws.audioscrobbler.com/2.0/';
        $response = $this->httpClient->request('GET', $apiUrl, [
            'query' => [
                'method' => 'track.getInfo',
                'api_key' => $apiKey,
                'format' => 'json',
                'track' => $trackName,
                'artist' => $artist
            ],
        ]);

        $body = $response->getBody();
        $data = json_decode($body, true);

        // Handle the response data as per your requirements
        // For example, you can return the data as a JSON response
        return response()->json($data);

    }
}
