<?php

namespace TallmanCode\HollywoodBundle\Manager;

use TallmanCode\HollywoodBundle\Api\Movies;
use TallmanCode\HollywoodBundle\Api\Television;
use TallmanCode\HollywoodBundle\Api\TelevisionSeasons;
use TallmanCode\HollywoodBundle\Api\Trending;
use TallmanCode\HollywoodBundle\Client\HollywoodClientInterface;

interface HollywoodManagerInterface
{
    public function getClient(): HollywoodClientInterface;

    public function movies(): Movies;

    public function television(): Television;

    public function televisionSeasons(): TelevisionSeasons;

    public function trending(): Trending;
}