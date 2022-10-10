<?php

namespace TallmanCode\HollywoodBundle\Api;

use TallmanCode\HollywoodBundle\Model\Movie;

class Movies extends AbstractHollywoodApi
{
    public function getDetails($movieId)
    {
        return $this->get('movie/'.$movieId, Movie::class);
    }

    public function getAccountStates($movieId)
    {
        return $this->get('movie/'.$movieId.'/account_states');
    }

    public function getAlternativeTitles($movieId)
    {
        return $this->get('movie/'.$movieId.'/alternative_titles');
    }

    public function getChanges($movieId)
    {
        return $this->get('movie/'.$movieId.'/changes');
    }

    public function getCredits($movieId)
    {
        return $this->get('movie/'.$movieId.'/credits');
    }

    public function getExternalIds($movieId)
    {
        return $this->get('movie/'.$movieId.'/external_ids');
    }

    public function getImages($movieId)
    {
        return $this->get('movie/'.$movieId.'/images');
    }

    public function getKeywords($movieId)
    {
        return $this->get('movie/'.$movieId.'/keywords');
    }

    public function getLists($movieId)
    {
        return $this->get('movie/'.$movieId.'/lists');
    }

    public function getRecommendations($movieId)
    {
        return $this->get('movie/'.$movieId.'/recommendations');
    }

    public function getReleaseDates($movieId)
    {
        return $this->get('movie/'.$movieId.'/release_dates');
    }

    public function getReviews($movieId)
    {
        return $this->get('movie/'.$movieId.'/reviews');
    }

    public function getSimilar($movieId)
    {
        return $this->get('movie/'.$movieId.'/similar');
    }

    public function getTranslations($movieId)
    {
        return $this->get('movie/'.$movieId.'/translations');
    }

    public function getVideos($movieId)
    {
        return $this->get('movie/'.$movieId.'/videos');
    }

    public function getWatchProviders($movieId)
    {
        return $this->get('movie/'.$movieId.'/watch/providers');
    }

    public function postRating($movieId)
    {
        return $this->post('movie/'.$movieId.'/rating');
    }

    public function deleteRating($movieId)
    {
        return $this->delete('movie/'.$movieId.'/rating');
    }

    public function getLatest()
    {
        return $this->get('movie/latest', Movie::class);
    }

    public function getNowPlaying()
    {
        return $this->get('movie/now_playing', Movie::class);
    }

    public function getPopular()
    {
        return $this->get('movie/popular', Movie::class);
    }

    public function getTopRated()
    {
        return $this->get('movie/top_rated', Movie::class);
    }

    public function getUpcoming()
    {
        return $this->get('movie/upcoming', Movie::class);
    }
}