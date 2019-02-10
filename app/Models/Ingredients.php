<?php

namespace App\Models;

use App\Traits\SelectOptions;
use Illuminate\Database\Eloquent\Model;

class Ingredients extends Model
{
    use SelectOptions;

    protected $guarded = [];

    public static function rules()
    {
        return [
          'name' => 'required|string|max:255|unique:ingredients'
        ];
    }

    public function food()
    {
        return $this
            ->belongsToMany("App\Models\Food", 'food_has_ingredients', 'food_id', 'ingredient_id')
            ->withTimestamps();
    }
}
