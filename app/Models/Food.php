<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $guarded = [];

    public static function rules($update = false)
    {
        if ($update) {
            return [
                'name' => 'required|max:255|string',
                'price' => 'required|numeric',
            ];
        }

        return [
            'name' => 'required|max:255|string|unique:foods',
            'price' => 'required|numeric',
        ];
    }

    public function foodType()
    {
        return $this->belongsTo('App\Models\FoodType');
    }

    public function flavour()
    {
        return $this->belongsTo('App\Models\Flavour');
    }

    public function ingredients()
    {
        return $this
            ->belongsToMany("App\Models\Ingredients", 'food_has_ingredients', 'food_id', 'ingredient_id')
            ->withTimestamps();
    }

    public function formatIngredients():string
    {
        $string = '';
        $this->ingredients()->each(function ($el) use (&$string) {
            $string .= $el->name . ', ';
        });
        return rtrim($string, ', ');
    }

    public function getIngredientsId()
    {
        return $test = $this->ingredients()->get()->pluck('id')->toArray();
    }
}
