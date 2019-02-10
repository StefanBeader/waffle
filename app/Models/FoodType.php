<?php

namespace App\Models;

use App\Traits\SelectOptions;
use Illuminate\Database\Eloquent\Model;

class FoodType extends Model
{
    use SelectOptions;

    const BAKIN_KOLAC = 1;
    const WAFFLE = 2;
    const GALETE = 3;
}
