<?php

namespace TallmanCode\DevaliciousBundle\Tests\Api\Movie;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;
use TallmanCode\HollywoodBundle\Client\HollywoodClient;
use TallmanCode\HollywoodBundle\Model\Movie;
use TallmanCode\HollywoodBundle\Response\PaginatedResponse;
use TallmanCode\HollywoodBundle\Test\HollywoodTestKernel;
use TallmanCode\HollywoodBundle\Test\ResponseTestTrait;
use TallmanCode\HollywoodBundle\Test\Responses\PaginatedMovieResponse;

class GetTopRatedTest extends WebTestCase
{
    use ResponseTestTrait;

    public function testGetTopRated()
    {
        $hollywoodManager = $this->setupManager(PaginatedMovieResponse::RESPONSE, 'GET', 'https://api.themoviedb.org/3/movie/top_rated');
        $hollywoodManagerResponse = $hollywoodManager->movies()->getTopRated();
        $this->assertInstanceOf(PaginatedResponse::class, $hollywoodManagerResponse);
        $this->assertObjectHasAttribute('page', $hollywoodManagerResponse);
        $this->assertObjectHasAttribute('results', $hollywoodManagerResponse);
        $this->assertObjectHasAttribute('totalPages', $hollywoodManagerResponse);
        $this->assertObjectHasAttribute('totalResults', $hollywoodManagerResponse);
        $this->assertInstanceOf(Movie::class, $hollywoodManagerResponse->getResults()[0]);
    }
}

