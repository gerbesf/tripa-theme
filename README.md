# T-theme

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what PSRs you support to avoid any confusion with users and contributors.

## Installation

You can install the package via composer:

```bash
composer require gerbesf/tripa-theme
```

### DEV MOD
composer.json
```
 "autoload": {
        "psr-4": {
            "App\\": "app/",
            "Gerbesf\\TripaTheme\\": "packages/gerbesf/tripa-theme/src/",
            ...
        }
    },
```

### Production mode
composer.json
```
     "repositories":[
         {
             "type": "vcs",
             "url": "https://github.com/gerbesf/tripa-theme.git"
         }
     ]
```

``` bash
composer install
```


## Publish

``` php
php artisan vendor:publish --provider="Gerbesf\TripaTheme\TripaThemeServiceProvider"
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email gerbes.matos@gmail.com instead of using the issue tracker.

## Credits

- [Gerbes Matos](https://github.com/gerbesf)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
