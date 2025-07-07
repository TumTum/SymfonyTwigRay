SymfonyTwigRay
--------------

```
composer require --dev tumtum/symfony-twig-ray
```

SymfonyTwigRay extends the Twig templating engine in a Symfony project by adding specialized debugging functions. 
With these functions, you can easily send variables to Ray in different color-coded highlights, 
making it simpler to track, analyze, and resolve potential issues in your codebase.


```html
{{ ray(variable) }}

{{ rayGreen(variable) }}
{{ rayOrange(variable) }}
{{ rayRed(variable) }}
{{ rayPurple(variable) }}
{{ rayBlue(variable) }}
{{ rayGray(variable) }}
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
