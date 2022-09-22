<?php

namespace TallmanCode\HollywoodBundle\Client;

use Symfony\Component\HttpClient\CachingHttpClient;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpKernel\HttpCache\Store;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class HollywoodClient implements HollywoodClientInterface
{
    private array $options;

    private HttpClientInterface $httpClient;
    private string $baseUrl;
    private bool $cachingClient;

    public function __construct(string $baseUrl, $options = [], $cachingClient = true)
    {
        $this->options = $options;
        $this->baseUrl = $baseUrl;
        $this->cachingClient = $cachingClient;
        $this->configure($options);
    }

    private function configure($options)
    {
        $resolver = new OptionsResolver();

        $resolver->setDefaults([
            'base_uri' => $this->baseUrl,
            'api_key' => null,
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ],
        ]);

        $resolver->setRequired(
            [
                'api_key',
            ]
        );

        $this->options = $resolver->resolve($options);

        if($this->cachingClient){
            $store = new Store();
            $this->httpClient = new CachingHttpClient(HttpClient::create(), $store, [
                'base_uri' => $this->options['base_uri'],
                'headers' => $this->options['headers'],
                'query' => [
                    'api_key' => $this->options['api_key'],
                    'append_to_response' => 'videos,images,genres,season',
                    'region' => 'US',
                ],
            ]);
        }else{
            $this->httpClient = HttpClient::create([
                'base_uri' => $this->options['base_uri'],
                'headers' => $this->options['headers'],
                'query' => [
                    'api_key' => $this->options['api_key'],
                    'append_to_response' => 'videos,images,genres,season',
                    'region' => 'US',
                ],
            ]);
        }
    }
}