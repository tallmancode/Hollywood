<?php

namespace TallmanCode\HollywoodBundle\Api;

class Movies extends AbstractHollywoodApi
{
    public function getNowPlaying()
    {
        return $this->get('movie/now_playing');
    }

    public function getPopular()
    {
        return $this->get('movie/popular');
    }

    public function getLatest()
    {
        return $this->get('movie/latest');
    }

    public function getTopRated()
    {
        return $this->get('movie/top_rated');
    }

    public function getUpcoming()
    {
        return $this->get('movie/upcoming');
    }
}