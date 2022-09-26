<?php

namespace TallmanCode\HollywoodBundle\Api;

class Movies extends AbstractHollywoodApi
{
    public function getNowPlaying()
    {
        return $this->get('movie/now_playing');
    }

    public function getLatest()
    {
        return $this->get('movie/latest');
    }

    public function getTopRated()
    {
        return $this->get('movie/top_rated');
    }
}