<?php

namespace TallmanCode\DevaliciousBundle\Tests\Api\Television;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;
use TallmanCode\HollywoodBundle\Client\HollywoodClient;
use TallmanCode\HollywoodBundle\Model\Movie;
use TallmanCode\HollywoodBundle\Model\Tv;
use TallmanCode\HollywoodBundle\Response\PaginatedResponse;
use TallmanCode\HollywoodBundle\Test\HollywoodTestKernel;
use TallmanCode\HollywoodBundle\Test\Responses\MovieResponse;
use TallmanCode\HollywoodBundle\Test\Responses\TvResponse;
use TallmanCode\HollywoodBundle\Test\ResponseTestTrait;
use TallmanCode\HollywoodBundle\Test\Responses\PaginatedMovieResponse;

class GetDetailsTest extends WebTestCase
{
    use ResponseTestTrait;

    public function testGetDetails()
    {
        $tvId = TvResponse::RESPONSE['id'];
        $hollywoodManager = $this->setupManager(
            TvResponse::RESPONSE,
            'GET',
            'https://api.themoviedb.org/3/tv/'.$tvId
        );
        $hollywoodManagerResponse = $hollywoodManager->television()->getDetails($tvId);

        $this->assertInstanceOf(Tv::class, $hollywoodManagerResponse);
        $this->assertEquals($tvId, $hollywoodManagerResponse->getId());
    }
}

