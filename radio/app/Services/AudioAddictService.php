<?php
namespace App\Services;
use App\Facades\AudioAddict;
use GuzzleHttp\Client;

class AudioAddictService 
{
    protected $httpClient;

    public function __construct(Client $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function getCurrentlyPlaying(string $service = AudioAddict::DI_FM): array
    {
        // Make a GET request to the API endpoint
        $response = $this->httpClient->get("https://api.audioaddict.com/v1/{$service}/currently_playing");

        // Get the response body as JSON
        $tracks = json_decode($response->getBody(), true);

        // Return the discovered tracks
        return $tracks;
    }

    public function getChannels(string $service = AudioAddict::DI_FM): array
    {
        // Make a GET request to the API endpoint
        $response = $this->httpClient->get("https://api.audioaddict.com/v1/{$service}/channels");

        // Get the response body as JSON
        $channels = json_decode($response->getBody(), true);

        // Return the discovered tracks
        return $channels;
    }

    public function getTrackDetails(int $trackId, string $service = AudioAddict::DI_FM): array
    {
        // Make a GET request to the API endpoint
        $response = $this->httpClient->get("https://api.audioaddict.com/v1/{$service}/tracks/{$trackId}");

        // Get the response body as JSON
        $trackDetails = json_decode($response->getBody(), true);

        // Return the track details
        return $trackDetails;
    }

    public function getArtistDetails(int $artistId, string $service = AudioAddict::DI_FM): array
    {
        // Make a GET request to the API endpoint
        $response = $this->httpClient->get("https://api.audioaddict.com/v1/{$service}/artists/{$artistId}");

        // Get the response body as JSON
        $artistDetails = json_decode($response->getBody(), true);

        // Return the track details
        return $artistDetails;
    }

    public function getNetworks(): array
    {
        // Make a GET request to the API endpoint
        $response = $this->httpClient->get("https://api.audioaddict.com/v1/networks");

        // Get the response body as JSON
        $networks = json_decode($response->getBody(), true);

        // Return the track details
        return $networks;
    }
}