<?php

namespace TallmanCode\HollywoodBundle\Api;

use TallmanCode\HollywoodBundle\Model\Season;

class TelevisionSeasons extends AbstractHollywoodApi
{
    public function getDetails($tvId, $seasonNumber): Season
    {
        return $this->get('tv/' . $tvId . '/season/' . $seasonNumber, Season::class);
    }
}