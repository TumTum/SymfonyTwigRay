<?php

namespace TumTum\SymfonyTwigRay;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class SymfonyTwigRayBundle extends Bundle
{
    public function build(ContainerBuilder $container): void
    {
        parent::build($container);

        $loader = new PhpFileLoader(
            $container,
            new FileLocator(__DIR__.'/DependencyInjection')
        );

        $loader->load('services.php');
    }
}
