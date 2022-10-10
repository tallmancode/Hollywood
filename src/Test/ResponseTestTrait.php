<?php

namespace TallmanCode\HollywoodBundle\Test;

use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;
use TallmanCode\HollywoodBundle\Client\HollywoodClient;

trait ResponseTestTrait
{
    public function setupManager($response, $method = 'GET', $url = null)
    {
        $kernel = new HollywoodTestKernel('test', true);
        $kernel->boot();
        $container = $kernel->getContainer();
        $mockResponse = new MockResponse(json_encode($response), ['http_code' => 200]);
        $mockHttpClient = new MockHttpClient([$mockResponse]);
        $response = $mockHttpClient->request($method, $url ?? 'https://api.themoviedb.org/3/movie/top_rated');
        $mockHollywoodClient = $this->createMock(HollywoodClient::class);
        $mockHollywoodClient->expects($this->once())
            ->method('send')
            ->willReturn($response);
        $container->set('hollywood.client', $mockHollywoodClient);
       return $container->get('hollywood.manager');
    }
}