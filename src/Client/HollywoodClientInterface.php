<?php

namespace TallmanCode\HollywoodBundle\Client;

use Symfony\Contracts\HttpClient\HttpClientInterface;

interface HollywoodClientInterface
{
    public function configure($options) :void;

    public function setupClient() : HttpClientInterface;
}