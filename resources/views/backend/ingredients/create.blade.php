@extends('backend.layouts.master')

@section('main')
    <h1>Dodaj Sastojak</h1>
    <hr>

    @include('backend.partials.errors')

    <div class="waffle-form">
        {{ Form::open(['url' => '/ingredients']) }}

        <div class="form-group">
            <label for="">Naziv</label>
            {{ Form::text('name', '', ['class' => 'form-control']) }}
        </div>

        {{ Form::submit('Sačuvaj', ['class' => 'btn btn-primary']) }}

        {{ Form::close() }}
    </div>
@endsection