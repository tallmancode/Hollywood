<?php

namespace TallmanCode\HollywoodBundle\Manager;

use TallmanCode\HollywoodBundle\Api\Movies;
use TallmanCode\HollywoodBundle\Client\HollywoodClientInterface;
use TallmanCode\HollywoodBundle\Model\Movie;

class HollywoodManager implements HollywoodManagerInterface
{
    protected HollywoodClientInterface $client;

    public function __construct(HollywoodClientInterface $client)
    {
        $this->client = $client;
    }

    public function getClient(): HollywoodClientInterface
    {
        return $this->client;
    }

    public function movies(): Movies
    {
        return new Movies($this, Movie::class);
    }
}