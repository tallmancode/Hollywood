<?php

namespace TallmanCode\DevaliciousBundle\Tests;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\DependencyInjection\Compiler\ResolveChildDefinitionsPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use TallmanCode\HollywoodBundle\DependencyInjection\TallmanCodeHollywoodExtension;
use TallmanCode\HollywoodBundle\TallmanCodeHollywoodBundle;
use TallmanCode\HollywoodBundle\Test\HollywoodTestKernel;

class ConfigTest extends TestCase
{
    public function testApiKeyNotSetConfig()
    {
        $this->expectException(InvalidConfigurationException::class);
        $this->expectExceptionMessage('The child config "api_key" under "hollywood" must be configured.');
        $container = $this->getRawContainer();

        $container->loadFromExtension('hollywood', []);

        $container->compile();
    }

    private function getRawContainer()
    {
        $container = new ContainerBuilder();
        $container->setParameter('kernel.debug', false);

        $hollywood = new TallmanCodeHollywoodExtension();
        $container->registerExtension($hollywood);

        $container->getCompilerPassConfig()->setOptimizationPasses([new ResolveChildDefinitionsPass()]);
        $container->getCompilerPassConfig()->setRemovingPasses([]);
        $container->getCompilerPassConfig()->setAfterRemovingPasses([]);

        $bundle = new TallmanCodeHollywoodBundle();
        $bundle->build($container);

        return $container;
    }

}