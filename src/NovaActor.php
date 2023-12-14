<?php

namespace Visanduma\NovaActor;

use Illuminate\Support\Collection;

class NovaActor
{
    public static function list(): Collection
    {
        $file = base_path('actors.json');

        if (file_exists($file)) {
            $content = file_get_contents($file);
        } else {
            $content = '[]';
        }

        return collect(json_decode($content, true));

    }
}
