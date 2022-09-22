<?php

namespace TallmanCode\HollywoodBundle\Client;

use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpClient\CachingHttpClient;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpKernel\HttpCache\Store;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class AbstractHollywoodClient
{
    protected array $options;

    protected HttpClientInterface $httpClient;

    protected string $baseUrl;

    protected bool $cachingClient;

    protected $cacheDir;

    public function __construct(ParameterBagInterface $parameterBag, string $baseUrl, $options = [], $cachingClient = true)
    {
        $this->options = $options;
        $this->baseUrl = $baseUrl;
        $this->cachingClient = $cachingClient;
        $this->configure($options);
        $this->cacheDir = $parameterBag->get('kernel.cache_dir');
        $this->httpClient = $this->setupClient();
    }

    public function configure($options): void
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
    }

    public function setupClient(): HttpClientInterface
    {
        if ($this->cachingClient) {
            $store = new Store($this->cacheDir);
            return new CachingHttpClient(HttpClient::create(), $store, [
                'base_uri' => $this->options['base_uri'],
                'headers' => $this->options['headers'],
                'query' => [
                    'api_key' => $this->options['api_key'],
                    'append_to_response' => 'videos,images,genres,season',
                    'region' => 'US',
                ],
            ]);
        }

        return HttpClient::create([
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