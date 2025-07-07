<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use TumTum\SymfonyTwigRay\Twig\RayDumpExtension;

return function(ContainerConfigurator $container) {
    $services = $container->services();

    $services->set(RayDumpExtension::class)
        ->tag('twig.extension')
        ->private();
};
