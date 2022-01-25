<?php

namespace Visanduma\LaravelAuthSwitch\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Visanduma\LaravelAuthSwitch\LaravelAuthSwitch
 */
class LaravelAuthSwitch extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-auth-switch';
    }
}
