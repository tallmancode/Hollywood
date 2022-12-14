<?php

namespace TallmanCode\HollywoodBundle\Manager;

use TallmanCode\HollywoodBundle\Api\Movies;
use TallmanCode\HollywoodBundle\Client\HollywoodClientInterface;

interface HollywoodManagerInterface
{
    public function getClient(): HollywoodClientInterface;

    public function movies(): Movies;
}