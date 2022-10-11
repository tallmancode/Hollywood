<?php

namespace TallmanCode\HollywoodBundle\Api;

use TallmanCode\HollywoodBundle\Model\Tv;
use TallmanCode\HollywoodBundle\Response\PaginatedResponse;

class TelevisionSeason extends AbstractHollywoodApi
{
    public function getDetails($tvId, $seasonNumber): Tv
    {
        return $this->get('tv/' . $tvId.'/season/'.$seasonNumber, Tv::class);
    }
}