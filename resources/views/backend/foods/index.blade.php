@extends('backend.layouts.master')

@section('main')
    <div>
        <h1>Meni</h1>
        <a href="{{ URL::to('/food/create') }}" class="btn btn-primary">Dodaj</a>
    </div>

    <div>
        <table class="table table-striped">
            <thead>
            <th>Naziv</th>
            <th>Cena</th>
            <th>Sastojci</th>
            <th>Ukus</th>
            <th>Vrsta</th>
            <th>Akcije</th>
            </thead>
            <tbody>
            @foreach($foods as $food)
                <tr>
                    <td>{{ $food->name }}</td>
                    <td>{{ $food->price }}</td>
                    <td>{{ $food->formatIngredients() }}</td>
                    <td>{{ $food->flavour->name }}</td>
                    <td>{{ $food->foodType->name }}</td>
                    <td><a href="{{ URL::to('/food/' . $food->id . '/edit') }}">Promeni</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $foods->links() }}
    </div>
@endsection