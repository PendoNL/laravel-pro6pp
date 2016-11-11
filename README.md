# PHP Wrapper for Pro6PP Api



The `PendoNL/laravel-pro6pp` package provides an easy to use way to communicate with Pro6PP's API to fetch location based data via a Facade. Of course you may also use the class without the Facade. More information on the class and it's methods can be found [here](https://github.com/PendoNL/pro6pp-php-wrapper).

## Installation & Usage

Install the package using composer:

`composer require pendonl/laravel-pro6pp`

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
