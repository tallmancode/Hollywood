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
use TallmanCode\HollywoodBundle\Test\Responses\PaginatedTvResponse;
use TallmanCode\HollywoodBundle\Test\ResponseTestTrait;
use TallmanCode\HollywoodBundle\Test\Responses\PaginatedMovieResponse;

class GetOnTheAirTest extends WebTestCase
{
    use ResponseTestTrait;

    public function testGetOnTheAir()
    {
        $hollywoodManager = $this->setupManager(PaginatedTvResponse::RESPONSE, 'GET', 'https://api.themoviedb.org/3/tv/on_the_air');
        $hollywoodManagerResponse = $hollywoodManager->television()->getOnTheAir();
        $this->assertInstanceOf(PaginatedResponse::class, $hollywoodManagerResponse);
        $this->assertObjectHasAttribute('page', $hollywoodManagerResponse);
        $this->assertObjectHasAttribute('results', $hollywoodManagerResponse);
        $this->assertObjectHasAttribute('totalPages', $hollywoodManagerResponse);
        $this->assertObjectHasAttribute('totalResults', $hollywoodManagerResponse);
        $this->assertInstanceOf(Tv::class, $hollywoodManagerResponse->getResults()[0]);
    }
}

