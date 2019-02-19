<?php

namespace App\Traits;

trait SelectOptions {

    public static function selectOptions()
    {
        $options = [];
        static::all()->each(function ($el) use (&$options) {
            return $options[$el->id] = ucwords($el->name);
        });
        uasort($options, function ($a, $b) {
            if ($a == $b) {
                return 0;
            }
            return ($a < $b) ? -1 : 1;
        });
        return $options;
    }
}