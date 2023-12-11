<?php

namespace Visanduma\NovaActor\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Visanduma\NovaActor\NovaActor
 */
class NovaActor extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'nova-actor';
    }
}
