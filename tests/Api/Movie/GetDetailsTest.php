<?php

namespace TallmanCode\DevaliciousBundle\Tests\Api\Movie;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use TallmanCode\HollywoodBundle\Model\Movie;
use TallmanCode\HollywoodBundle\Test\Responses\MovieResponse;
use TallmanCode\HollywoodBundle\Test\Responses\TvResponse;
use TallmanCode\HollywoodBundle\Test\ResponseTestTrait;

class GetDetailsTest extends WebTestCase
{
    use ResponseTestTrait;

    public function testGetDetails()
    {
        $movieId = MovieResponse::RESPONSE['id'];
        $hollywoodManager = $this->setupManager(
            MovieResponse::RESPONSE,
            'GET',
            'https://api.themoviedb.org/3/movie/'.$movieId
        );
        $hollywoodManagerResponse = $hollywoodManager->movies()->getDetails($movieId);

        $this->assertInstanceOf(Movie::class, $hollywoodManagerResponse);
        $this->assertEquals($movieId, $hollywoodManagerResponse->getId());
    }
}

