@extends('backend.layouts.master')

@section('main')
    <h1>Hrana</h1>
    <hr>

    @include('backend.partials.errors')

    <div class="waffle-form">
        {{ Form::open(['url' => '/food', 'file' => true, 'enctype' => 'multipart/form-data']) }}

        <div class="form-group">
            <label for="">Naziv</label>
            {{ Form::text('name', '', ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            <label for="">Cena</label>
            <div class="input-group">
                {{ Form::number('price', '', ['class' => 'form-control']) }}
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2">RSD</span>
                </div>
            </div>
        </div>
        <div class="cols2">
            <div class="form-group">
                <label for="">Vrsta</label>
                {{ Form::select('food_type_id', $foodType, '', ['class' => 'form-control selectpicker']) }}
            </div>

            <div class="form-group">
                <label for="">Ukus</label>
                {{ Form::select('flavour_id', $flavour, '', ['class' => 'form-control selectpicker']) }}
            </div>
        </div>

        <div class="form-group">
            <label for="">Sastojci</label>
            {{ Form::select('ingredients[]', $ingredients, '', ['class' => 'form-control selectpicker', 'data-live-search' => 'true', 'multiple'=>'multiple']) }}
        </div>

        <div class="form-group">
            <label for="">Slika</label>
            {{ Form::file('image', ['class' => 'form-control-file']) }}
        </div>

        <div class="form-group">
            <label for="">Aktivno</label>
            {{ Form::select('is_active', [0 => 'Ne', 1 => 'Da'], '0', ['class' => 'form-control selectpicker']) }}
        </div>

        {{ Form::submit('Sačuvaj', ['class' => 'btn btn-primary']) }}

        {{ Form::close() }}
    </div>
@endsection