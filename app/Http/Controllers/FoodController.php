<?php

namespace App\Http\Controllers;

use App\Models\Flavour;
use App\Models\Food;
use App\Models\FoodType;
use App\Models\Ingredients;
use App\Services\UploadImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods = Food::orderBy('created_at', 'Desc')->paginate(10);

        return view('backend/foods/index', compact('foods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ingredients = Ingredients::selectOptions();
        $flavour = Flavour::selectOptions();
        $foodType = FoodType::selectOptions();

        return view('backend/foods/create', compact('ingredients', 'flavour', 'foodType'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(Food::rules());

        if (empty($request->ingredients)) {
            return redirect()->back()->with(['error' => 'Fale sastojci']);
        }

        DB::transaction(function() use ($request) {
            $food = Food::create($request->except(['ingredients', 'image']));
            $food->ingredients()->attach($request->ingredients);

            if ($request->file('image')) {
                $uploadImage = new UploadImage($request->file('image'), 'images/menu-items/' . $food->id);
                $uploadImage->upload();
            }
        });

        return redirect()->to('/food');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function show(Food $food)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function edit(Food $food)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Food $food)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function destroy(Food $food)
    {
        //
    }
}
