<?php

namespace App\Providers;

use App\Services\AudioAddictService;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Handler\CurlHandler;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton('audio-addict', function() {
            // Create a new Guzzle client with a custom HandlerStack
            $handlerStack = HandlerStack::create(new CurlHandler());
            $handlerStack->push(Middleware::retry(function ($retries, $request, $response, $exception) {
                // Retry on connection errors or 429 (Too Many Requests) response status code
                return $retries < 3 && ($exception instanceof \GuzzleHttp\Exception\RequestException
                    || ($response && $response->getStatusCode() === 429));
            }), 'retry_delay'); // Pass a string name as the second argument

            $client = new Client(['handler' => $handlerStack]);
            $client = new Client(['handler' => $handlerStack]);
            return new AudioAddictService($client);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
