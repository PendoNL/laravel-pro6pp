# Laravel Facade for Pro6PP PHP Wrapper

[![Latest version on Packagist](https://img.shields.io/packagist/v/pendonl/laravel-pro6pp.svg?style=flat-square)](https://packagist.org/packages/pendonl/laravel-fontawesome)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Travis branch](https://img.shields.io/travis/PendoNL/laravel-pro6pp/master.svg)](https://travis-ci.org/PendoNL/laravel-fontawesome)
[![Scrutinizer](https://img.shields.io/scrutinizer/g/PendoNL/laravel-pro6pp.svg)](https://scrutinizer-ci.com/g/PendoNL/laravel-fontawesome/)
[![SensioLabs Insight](https://img.shields.io/sensiolabs/i/ab3c9257-2b29-47fd-8ef4-57f31bc53078.svg)](https://insight.sensiolabs.com/projects/ab3c9257-2b29-47fd-8ef4-57f31bc53078)
[![Style Ci](https://styleci.io/repos/73506076/shield)](https://styleci.io/repos/73506076/)
[![Total Downloads](https://img.shields.io/packagist/dt/pendonl/laravel-pro6pp.svg?style=flat-square)](https://packagist.org/packages/pendonl/laravel-pro6pp)

The `PendoNL/laravel-pro6pp` package provides an easy to use way to communicate with Pro6PP's API to fetch location based data via a Facade. Of course you may also use the class without the Facade. More information on the class and it's methods can be found [here](https://github.com/PendoNL/pro6pp-php-wrapper).

## Usage

You can use any method by using the Facade, your API key and preferred data type are used automatically with each request:

```php
$getAddress = Pro6pp::autocomplete(6225, '7', c);
$suggestions = Pro6pp::suggest('Maast', 10);
$distanceBetweenCoordinates = Pro6pp::coordinateDistance(50.858030, 5.717376, 50.840078, 5.659258);
```

## Installation

Install the package using composer:

`composer require pendonl/laravel-pro6pp`

Next, you must install the service provider:

```php
// config/app.php
'providers' => [
    ...
    PendoNL\LaravelPro6pp\LaravelPro6ppServiceProvider::class,
];
```

Optionally, register the facade:

```php
// config/app.php
'aliases' => [
    ...
    'Pro6pp' => PendoNL\LaravelPro6pp\Facade::class,
];
```

To function properly, thise package requires `pendonl/pro6pp-php-wrapper`, this dependency will be installed automatically.

Then publish the configuration file using:

`php artisan vendor:publish --provider="PendoNL\LaravelPro6pp\LaravelPro6ppServiceProvider"`

If you're using an .env file, make sure these are added to the bottom of that file:

```code
PRO6PP_API_KEY=
PRO6PP_FORMAT=json
PRO6PP_PRETTY=false
```

## Security

If you discover any security related issues, please email joshua@pendo.nl instead of using the issue tracker.

## Credits

Thanks to Pro6PP for their efforts to create, maintain and update a postal database for a fair price.

## About Pendo
Pendo is a webdevelopment agency based in Maastricht, Netherlands. If you'd like, you can [visit our website](https://pendo.nl).

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
