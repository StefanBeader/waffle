@extends('backend.layouts.master')

@section('main')
    <h1>Poruke</h1>
    <hr>

    @foreach($messages as $message)
        <div class="message">
            <h4><span>Ime:</span> {{ $message->name ?? 'Nije navedeno' }}</h4>
            <h4><span>E-mail adresa:</span> {{ $message->email }}</h4>
            <p><span>Poruka:</span> {{ $message->content }}</p>
        </div>
        <hr>
    @endforeach

    <div>
        {{ $messages->links() }}
    </div>

@endsection