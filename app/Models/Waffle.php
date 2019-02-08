<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Waffle extends Model
{
    protected $guarded = [];

    public function ingredients()
    {
        return $this->hasMany('App\Ingredients');
    }

    public function type()
    {
        return $this->belongsTo('App\WaffleType');
    }
}
