<?php

namespace Visanduma\NovaActor;

use Illuminate\Support\Collection;

class NovaActor
{
    public static function list(): Collection
    {
        return collect(config('nova-actor.accounts', []));
    }
}
