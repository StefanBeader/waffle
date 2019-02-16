@extends('backend.layouts.master')

@section('main')
    <h1>Hrana</h1>
    <hr>

    @include('backend.partials.errors')

    <div class="waffle-form">
        {{ Form::open(['url' => '/food/' . $food->id, 'method' => 'PUT', 'file' => true, 'enctype' => 'multipart/form-data']) }}

        <div class="form-group">
            <label for="">Naziv</label>
            {{ Form::text('name', $food->name, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            <label for="">Cena</label>
            <div class="input-group">
                {{ Form::number('price', $food->price, ['class' => 'form-control']) }}
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2">RSD</span>
                </div>
            </div>
        </div>
        <div class="cols2">
            <div class="form-group">
                <label for="">Vrsta</label>
                {{ Form::select('food_type_id', $foodType, $food->food_type_id, ['class' => 'form-control selectpicker']) }}
            </div>

            <div class="form-group">
                <label for="">Ukus</label>
                {{ Form::select('flavour_id', $flavour, $food->flavour_id, ['class' => 'form-control selectpicker']) }}
            </div>
        </div>

        <div class="form-group">
            <label for="">Sastojci</label>
            {{ Form::select('ingredients[]', $ingredients, $food->getIngredientsId(), ['class' => 'form-control selectpicker', 'multiple'=>'multiple']) }}
        </div>

        <div class="form-group">
            <label for="">Slika</label>
            {{ Form::file('image', ['class' => 'form-control-file']) }}
        </div>

        <div class="form-group">
            <label for="">Aktivno</label>
            {{ Form::select('is_active', [0 => 'Ne', 1 => 'Da'], $food->is_active, ['class' => 'form-control selectpicker']) }}
        </div>

        {{ Form::submit('Sačuvaj', ['class' => 'btn btn-primary']) }}

        {{ Form::close() }}
    </div>
@endsection