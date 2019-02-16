<?php

namespace App\Traits;

trait SelectOptions {

    public static function selectOptions()
    {
        $options = [];
        static::all()->each(function ($el) use (&$options) {
            return $options[$el->id] = ucwords($el->name);
        });
        sort($options);
        return $options;
    }
}