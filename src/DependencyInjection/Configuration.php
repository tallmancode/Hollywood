<?php
namespace TallmanCode\HollywoodBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('hollywood');

        $rootNode = $treeBuilder->getRootNode();

        $rootNode
            ->children()
                ->scalarNode('api_key')->isRequired()->cannotBeEmpty()->end()
                ->scalarNode('base_url')->cannotBeEmpty()->defaultValue('https://api.themoviedb.org/3')->end()
                ->booleanNode('caching_client')->defaultTrue()->end()
            ->end();

        return $treeBuilder;
    }
}
