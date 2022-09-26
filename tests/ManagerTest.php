<?php
namespace TallmanCode\DevaliciousBundle\Tests;

use PHPUnit\Framework\TestCase;
use TallmanCode\HollywoodBundle\Api\Movies;
use TallmanCode\HollywoodBundle\Client\HollywoodClientInterface;
use TallmanCode\HollywoodBundle\Manager\HollywoodManagerInterface;
use TallmanCode\HollywoodBundle\Test\HollywoodTestKernel;

class ManagerTest extends TestCase
{
    public function testHollywoodManagerGetClient()
    {
        $kernel = new HollywoodTestKernel('test', true);
        $kernel->boot();
        $container = $kernel->getContainer();
        $hollywoodManager = $container->get('hollywood.manager');
        $this->assertInstanceOf(HollywoodClientInterface::class, $hollywoodManager->getClient());
    }

    public function testGetMoviesApi()
    {
        $kernel = new HollywoodTestKernel('test', true);
        $kernel->boot();
        $container = $kernel->getContainer();
        $hollywoodManager = $container->get('hollywood.manager');
        $this->assertInstanceOf(Movies::class, $hollywoodManager->movies());
    }
}

