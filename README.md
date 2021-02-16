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


## config/app.php


``` php
    // Provider
    \Gerbesf\TripaTheme\TripaThemeServiceProvider::class
    
    // Facade
    'Tripa'=> \Gerbesf\TripaTheme\TripaThemeFacade::class
```

## Credits

- [Gerbes Matos](https://github.com/gerbesf)
