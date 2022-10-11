<?php

namespace TallmanCode\HollywoodBundle\Manager;

use TallmanCode\HollywoodBundle\Api\Movies;
use TallmanCode\HollywoodBundle\Api\Television;
use TallmanCode\HollywoodBundle\Api\TelevisionSeasons;
use TallmanCode\HollywoodBundle\Api\Trending;
use TallmanCode\HollywoodBundle\Client\HollywoodClientInterface;
use TallmanCode\HollywoodBundle\Model\Movie;
use TallmanCode\HollywoodBundle\Model\Tv;

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
        return new Movies($this);
    }

    public function television(): Television
    {
        return new Television($this);
    }

    public function televisionSeasons(): TelevisionSeasons
    {
        return new TelevisionSeasons($this);
    }

    public function trending(): Trending
    {
        return new Trending($this);
    }
}