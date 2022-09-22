<?php

namespace TallmanCode\HollywoodBundle\DependencyInjection;

use Exception;
use SebastianBergmann\Diff\ConfigurationException;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class TallmanCodeHollywoodExtension extends Extension
{
    /**
     * @throws Exception
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader(
            $container,
            new FileLocator(__DIR__ . '/../Resources/config')
        );
        $loader->load('services.xml');

        $configuration = $this->getConfiguration($configs, $container);

        if (!$configuration) {
            throw new \InvalidArgumentException('Hollywood Bundle configuration is null.');
        }

        $config = $this->processConfiguration($configuration, $configs);

        $this->setHollywoodClientConfigs($container, $config);

    }

    public function setHollywoodClientConfigs($container, $config)
    {
        $definition = $container->getDefinition('hollywood.client');
        $definition->setArgument('$baseUrl', $config['base_url']);
        $definition->setArgument('$options', []);
        $definition->setArgument('$cachingClient', $config['caching_client']);
    }


    public function getAlias(): string
    {
        return 'hollywood';
    }
}
