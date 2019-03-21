@extends('layout')

@section('title', 'Gamers | Manufacturers')

@section('messages', '')

@section('content')
    <header>
        <h1>Games</h1>
    </header>
    <section>
        <ul class="list-unstyled">
            @foreach($games as $aGame)
                <li class="row">
                    <b class="col-1">{{ $aGame->id }}</b>
                    <span class="col">{{ $aGame->name }}</span>
                    <a href="/games/{{ $aGame->id }}" class="col">Details</a>
                </li>
            @endforeach
        </ul>
    </section>
@endsection