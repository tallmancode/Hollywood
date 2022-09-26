<?php

namespace TallmanCode\HollywoodBundle\Api;

class Movies extends AbstractHollywoodApi
{
    public function getLatest()
    {
        return $this->get('movie/latest');
    }

    public function getTopRated()
    {
        return $this->get('movie/top_rated');
    }
}