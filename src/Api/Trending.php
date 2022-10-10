<?php

namespace TallmanCode\HollywoodBundle\Api;

use TallmanCode\HollywoodBundle\Model\Movie;
use TallmanCode\HollywoodBundle\Model\Tv;

class Trending extends AbstractHollywoodApi
{
    public function getTrending($page = 1, $mediaType = 'movie', $timeWindow = 'week')
    {
        $model = null;

        if('movie' === $mediaType){
            $model = Movie::class;
        }elseif('tv' === $mediaType){
            $model = Tv::class;
        }

        return $this->get('trending/'.$mediaType.'/'.$timeWindow.'?page='.$page, $model);
    }
}