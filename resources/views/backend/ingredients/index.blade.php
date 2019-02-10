@extends('backend.layouts.master')

@section('main')
    <h1>Sastojci</h1>
    <a class="btn btn-primary" href="{{ URL::to('/ingredients/create') }}">Dodaj Sastojak</a>

    <div>
        <table class="table table-striped">
            <thead>
            <th>Naziv</th>
            <th>Akcije</th>
            </thead>
            <tbody>
            @foreach($ingredients as $ingredient)
                <tr>
                    <td>{{ $ingredient->name }}</td>
                    <td><a href="{{ URL::to('/ingredients/' . $ingredient->id . '/edit') }}">Promeni</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $ingredients->links() }}
    </div>
@endsection