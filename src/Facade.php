<?php

namespace PendoNL\LaravelPro6pp;

/**
 * Class Facade.
 *
 * @method static string icon(string $icon, array $options = [])
 */
class Facade extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-pro6pp';
    }
}
