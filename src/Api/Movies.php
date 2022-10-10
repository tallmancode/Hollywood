<?php

namespace TallmanCode\HollywoodBundle\Api;

use TallmanCode\HollywoodBundle\Model\Movie;
use TallmanCode\HollywoodBundle\Response\PaginatedResponse;

class Movies extends AbstractHollywoodApi
{
    public function getDetails($movieId): Movie
    {
        return $this->get('movie/'.$movieId, Movie::class);
    }

    public function getLatest() :Movie
    {
        return $this->get('movie/latest', Movie::class);
    }

    public function getNowPlaying($page = 1): PaginatedResponse
    {
        return $this->get('movie/now_playing?page='.$page, Movie::class);
    }

    public function getPopular($page = 1): PaginatedResponse
    {
        return $this->get('movie/popular?page='.$page, Movie::class);
    }

    public function getTopRated($page = 1): PaginatedResponse
    {
        return $this->get('movie/top_rated?page='.$page, Movie::class);
    }

    public function getUpcoming($page = 1): PaginatedResponse
    {
        return $this->get('movie/upcoming?page='.$page, Movie::class);
    }
}