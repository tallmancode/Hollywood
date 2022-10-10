<?php

namespace TallmanCode\HollywoodBundle\Api;

use TallmanCode\HollywoodBundle\Model\Tv;

class Television extends AbstractHollywoodApi
{
    public function getDetails($tvId)
    {
        return $this->get('tv/'.$tvId, Tv::class);
    }

    public function getAccountStates($tvId)
    {
        return $this->get('tv/'.$tvId.'/account_states');
    }

    public function getAggregateCredits($tvId)
    {
        return $this->get('tv/'.$tvId.'/aggregate_credits');
    }

    public function getAlternativeTitles($tvId)
    {
        return $this->get('tv/'.$tvId.'/alternative_titles');
    }

    public function getChanges($tvId)
    {
        return $this->get('tv/'.$tvId.'/changes');
    }

    public function getContentRatings($tvId)
    {
        return $this->get('tv/'.$tvId.'/content_ratings');
    }

    public function getCredits($tvId)
    {
        return $this->get('tv/'.$tvId.'/credits');
    }

    public function getEpisodeGroups($tvId)
    {
        return $this->get('tv/'.$tvId.'/episode_groups');
    }

    public function getExternalIds($tvId)
    {
        return $this->get('tv/'.$tvId.'/external_ids');
    }

    public function getImages($tvId)
    {
        return $this->get('tv/'.$tvId.'/images');
    }

    public function getKeywords($tvId)
    {
        return $this->get('tv/'.$tvId.'/keywords');
    }

    public function getRecommendations($tvId)
    {
        return $this->get('tv/'.$tvId.'/recommendations');
    }

    public function getReviews($tvId)
    {
        return $this->get('tv/'.$tvId.'/reviews');
    }

    public function getScreenedTheatrically($tvId)
    {
        return $this->get('tv/'.$tvId.'/screened_theatrically');
    }

    public function getSimilar($tvId)
    {
        return $this->get('tv/'.$tvId.'/similar');
    }

    public function getTranslations($tvId)
    {
        return $this->get('tv/'.$tvId.'/translations');
    }

    public function getVideos($tvId)
    {
        return $this->get('tv/'.$tvId.'/videos');
    }

    public function getWatchProviders($tvId)
    {
        return $this->get('tv/'.$tvId.'/watch/providers');
    }

    public function postRating($tvId)
    {
        return $this->post('tv/'.$tvId.'/rating');
    }

    public function deleteRating($tvId)
    {
        return $this->delete('tv/'.$tvId.'/rating');
    }

    public function getLatest()
    {
        return $this->get('tv/latest', Tv::class);
    }

    public function getAiringToday()
    {
        return $this->get('tv/airing_today');
    }

    public function getOnTheAir()
    {
        return $this->get('tv/on_the_air');
    }

    public function getPopular()
    {
        return $this->get('tv/popular', Tv::class);
    }

    public function getTopRated()
    {
        return $this->get('tv/top_rated', Tv::class);
    }
}