<?php

namespace TallmanCode\HollywoodBundle\Test;

use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Kernel;
use TallmanCode\HollywoodBundle\TallmanCodeHollywoodBundle;

class HollywoodTestKernel extends Kernel implements CompilerPassInterface
{
    use MicroKernelTrait;

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config.yml');
    }

    public function process(ContainerBuilder $container)
    {
        $defn = $container->getDefinition('hollywood.client');
        $defn->setPublic(true);

        $defn = $container->getDefinition('hollywood.manager');
        $defn->setPublic(true);
    }

    protected function configureContainer(ContainerBuilder $container, LoaderInterface $loader)
    {
        $container->loadFromExtension('framework', [
            'secret' => 123,
            'router' => [
                'utf8' => true,
            ],
            'http_method_override' => false,
        ]);
    }

    public function registerBundles(): iterable
    {
        return [
            new FrameworkBundle(),
            new TallmanCodeHollywoodBundle()
        ];
    }
}