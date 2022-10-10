<?php

namespace TallmanCode\DevaliciousBundle\Tests\Api\Television;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;
use TallmanCode\HollywoodBundle\Client\HollywoodClient;
use TallmanCode\HollywoodBundle\Model\Movie;
use TallmanCode\HollywoodBundle\Response\PaginatedResponse;
use TallmanCode\HollywoodBundle\Test\HollywoodTestKernel;
use TallmanCode\HollywoodBundle\Test\Responses\MovieResponse;
use TallmanCode\HollywoodBundle\Test\ResponseTestTrait;
use TallmanCode\HollywoodBundle\Test\Responses\PaginatedMovieResponse;

class GetLatestTest extends WebTestCase
{
    use ResponseTestTrait;

    public function testGetLatest()
    {
        $hollywoodManager = $this->setupManager(MovieResponse::RESPONSE, 'GET', 'https://api.themoviedb.org/3/movie/latest');
        $hollywoodManagerResponse = $hollywoodManager->movies()->getLatest();

        $this->assertInstanceOf(Movie::class, $hollywoodManagerResponse);
    }
}

