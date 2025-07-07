<?php

declare(strict_types=1);

namespace TumTum\SymfonyTwigRay\Twig;


use Symfony\Component\DependencyInjection\Attribute\AsTaggedItem;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

#[AsTaggedItem('twig.extension')]
class RayDumpExtension extends AbstractExtension
{

    public function getFunctions()
    {
        return [
            new TwigFunction('ray', fn() => $this->dump(func_get_args())),
            new TwigFunction('rayGreen', fn() => $this->dump(func_get_args(), 'green')),
            new TwigFunction('rayOrange', fn() => $this->dump(func_get_args(), 'orange')),
            new TwigFunction('rayRed', fn() => $this->dump(func_get_args(), 'red')),
            new TwigFunction('rayPurple', fn() => $this->dump(func_get_args(), 'purple')),
            new TwigFunction('rayBlue', fn() => $this->dump(func_get_args(), 'blue')),
            new TwigFunction('rayGray', fn() => $this->dump(func_get_args(), 'gray')),
        ];
    }

    private function dump(mixed $args, string $color = ''): void
    {
        ray(...$args)->color($color);
    }
}
