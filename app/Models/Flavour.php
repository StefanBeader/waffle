<?php

namespace App\Models;

use App\Traits\SelectOptions;
use Illuminate\Database\Eloquent\Model;

class Flavour extends Model
{
    use SelectOptions;

    const SLATKO = 1;
    const SLANO = 2;
}
