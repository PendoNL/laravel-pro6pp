# PHP Wrapper for Pro6PP Api

[![Latest version on Packagist](https://img.shields.io/packagist/v/pendonl/pro6pp-php-wrapper.svg?style=flat-square)](https://packagist.org/packages/pendonl/laravel-fontawesome)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Travis branch](https://img.shields.io/travis/PendoNL/pro6pp-php-wrapper/master.svg)](https://travis-ci.org/PendoNL/laravel-fontawesome)
[![Scrutinizer](https://img.shields.io/scrutinizer/g/PendoNL/pro6pp-php-wrapper.svg)](https://scrutinizer-ci.com/g/PendoNL/laravel-fontawesome/)
[![SensioLabs Insight](https://img.shields.io/sensiolabs/i/0bcf56eb-37d1-4525-a4ef-2375d03563aa.svg)](https://insight.sensiolabs.com/projects/e660c560-9d50-43e3-9be1-e556ba78f189)
[![Style Ci](https://styleci.io/repos/73438968/shield)](https://styleci.io/repos/73438968/)
[![Github All Releases](https://img.shields.io/github/downloads/pendo/pro6pp-php-wrapper/total.svg)](https://github.com/pendonl/laravel-fontawesome)

The `PendoNL/pro6pp-php-wrapper` package provides an easy to use way to communicate with Pro6PP's API to fetch location based data such as addresses, coordinates, etc. Below you can find a list all methods.

## Installation & Usage

Install the package using composer or by downloading the zip. When downloading the zip you only need to include Pro6pp.php in your page.

`composer require pendonl/pro6pp-php-wrapper`

Below you'll find a page with all methods.  Please reference the class and API documentation by Pro6pp for all parameters. 

[API Documentation by Pro6pp (Dutch)](https://www.pro6pp.nl/developers/basic-information)

```php
<?php

require __DIR__ . '/vendor/autoload.php';

$Pro6pp = new \PendoNL\Pro6pp\Pro6pp('api_code', 'json');

/**
 * Autocomplete an address. This can be achieved in different ways
 * (1) With a nl_fourpp postalcode
 * (2) With a nl_sixpp postalcode
 * (3) With a nl_sixpp postalcode housenumber and extension
 */

$Pro6pp->autocomplete(6225);
$Pro6pp->autocomplete('6225XS');
$Pro6pp->autocomplete('6225XS', 7);
$Pro6pp->autocomplete('6225XS', 7, 'c');

/**
 * Reverse address look-up. Provide the method with valid lat/lng
 * and you'll be presented with an address if found.
 */

$Pro6pp->reverse(50.858030, 5.717376);

/**
 * Find the nearest postalcodes from a given set of postalcodes compared
 * to a single postalcode. The second parameter takes an array with either
 * a nl_fourpp, a nl_sixpp or a set of lat/lng.
 */

$Pro6pp->locator(['6220','6221','6223','6224'], ['nl_fourpp' => 6216]);

/**
 * Find all postals within a given range. The second parameter is in meters.
 */

$Pro6pp->range(6225, 2500);

/**
 * Get autocomplete suggestions for city names, takes a second parameter for
 * the maximum number of results.
 */

$Pro6pp->suggest('Maast', 10);

/**
 * Calculate the distance between two nl_fourpp, 3rd parameter can be set to 'road',
 * be carefull: this is for supported account only.
 */

$Pro6pp->distance(6225, 6210, 'straight');

/**
 * Calculate distance between two coordinates
 */

$Pro6pp->coordinate_distance(50.858030, 5.717376, 50.840078, 5.659258);
```

## Security

If you discover any security related issues, please email joshua@pendo.nl instead of using the issue tracker.

## Credits

Thanks to Pro6PP for their efforts to create, maintain and update a postal database for a fair price.

## About Pendo
Pendo is a webdevelopment agency based in Maastricht, Netherlands. If you'd like, you can [visit our website](https://pendo.nl).

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
