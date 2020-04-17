<?php

declare(strict_types=1);

/*
 * This file is part of nexper/contao-grid-bundle.
 *
 * (c) 2020 Nexper <https://nexper.de>
 *
 * @author André Heeke <https://github.com/andreheeke>
 */

namespace Nexper\ContaoGridBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('nx_grid');

        $treeBuilder->getRootNode()
            ->children()
                ->scalarNode('editable_breakpoints')
                    ->defaultValue('xs,sm,md,lg,xl')
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
