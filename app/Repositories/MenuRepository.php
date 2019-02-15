<?php

namespace App\Repositories;

use App\Models\Flavour;
use App\Models\Food;
use App\Models\FoodType;

class MenuRepository {

    public function getMenu()
    {
        $slatkiBakinKolac = [];
        $slaniBakinKolac = [];
        $slatkeWaffle = [];
        $slaneWaffle = [];
        $slatkeGalete = [];
        $slaneGalete = [];

        $food = Food::orderBy('id', 'Desc')->with(['ingredients'])->get();

        list($sweet, $salty) = $food->partition(function ($i) {
            return $i->flavour_id === 1;
        });

        $sweet->each(function ($i) use(&$slatkiBakinKolac, &$slatkeWaffle, &$slatkeGalete) {
           switch ($i->food_type_id) {
               case FoodType::BAKIN_KOLAC:
                   $slatkiBakinKolac[] = $i;
                   break;
               case FoodType::WAFFLE:
                   $slatkeWaffle[] = $i;
                   break;
               case FoodType::GALETE:
                   $slatkeGalete[] = $i;
                   break;
           }
        });

        $salty->each(function ($i) use(&$slaniBakinKolac, &$slaneWaffle, &$slaneGalete) {
            switch ($i->food_type_id) {
                case FoodType::BAKIN_KOLAC:
                    $slaniBakinKolac[] = $i;
                    break;
                case FoodType::WAFFLE:
                    $slaneWaffle[] = $i;
                    break;
                case FoodType::GALETE:
                    $slaneGalete[] = $i;
                    break;
            }
        });


        return [
            Flavour::SLATKO => [
                FoodType::BAKIN_KOLAC => $slatkiBakinKolac,
                FoodType::WAFFLE => $slatkeWaffle,
                FoodType::GALETE => $slatkeGalete,
            ],
            Flavour::SLANO => [
                FoodType::BAKIN_KOLAC => $slaniBakinKolac,
                FoodType::WAFFLE => $slaneWaffle,
                FoodType::GALETE => $slaneGalete,
            ],
        ];
    }
}