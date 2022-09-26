<?php
namespace TallmanCode\DevaliciousBundle\Tests;

use PHPUnit\Framework\TestCase;
use TallmanCode\HollywoodBundle\Client\HollywoodClientInterface;
use TallmanCode\HollywoodBundle\Manager\HollywoodManagerInterface;
use TallmanCode\HollywoodBundle\Test\HollywoodTestKernel;

class ServiceWiringTest extends TestCase
{
    public function testHollywoodClientWiring()
    {
        $kernel = new HollywoodTestKernel('test', true);
        $kernel->boot();
        $container = $kernel->getContainer();
        $hollywoodClient = $container->get('hollywood.client');
        $this->assertInstanceOf(HollywoodClientInterface::class, $hollywoodClient);
    }

    public function testHollywoodManagerWiring()
    {
        $kernel = new HollywoodTestKernel('test', true);
        $kernel->boot();
        $container = $kernel->getContainer();
        $hollywoodManager = $container->get('hollywood.manager');
        $this->assertInstanceOf(HollywoodManagerInterface::class, $hollywoodManager);
    }
}

