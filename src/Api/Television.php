<?php

namespace TallmanCode\HollywoodBundle\Api;

use TallmanCode\HollywoodBundle\Model\Tv;
use TallmanCode\HollywoodBundle\Response\PaginatedResponse;

class Television extends AbstractHollywoodApi
{
    public function getDetails($tvId): Tv
    {
        return $this->get('tv/' . $tvId, Tv::class);
    }

    public function getLatest(): Tv
    {
        return $this->get('tv/latest', Tv::class);
    }

    public function getAiringToday($page = 1): PaginatedResponse
    {
        return $this->get('tv/airing_today?page=' . $page, Tv::class);
    }

    public function getOnTheAir($page = 1): PaginatedResponse
    {
        return $this->get('tv/on_the_air?page=' . $page, Tv::class);
    }

    public function getPopular($page = 1): PaginatedResponse
    {
        return $this->get('tv/popular?page=' . $page, Tv::class);
    }

    public function getTopRated($page = 1): PaginatedResponse
    {
        return $this->get('tv/top_rated?page=' . $page, Tv::class);
    }
}