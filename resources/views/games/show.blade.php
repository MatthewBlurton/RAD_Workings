@extends('layout')

@section('title', 'Gamers | Manufacturers')

@section('messages', '')

@section('content')
    <header>
        <h1>Games</h1>
    </header>
    <section>
        <h3>Game: {{ $game->name }}</h3>
        <table class="table table-stripped">
            <tbody>
                <tr>
                    <th scope="row">ID</th>
                    <td>{{ $game->id }}</td>
                </tr>
                <tr>
                    <th scope="row">Name</th>
                    <td>{{ $game->name }}</td>
                </tr>
                <tr>
                    <th scope="row">Game Type</th>
                    <td><a href="/game_types/{{ $game->game_type_id }}" target="">{{ $game->gameType->game_type}}</a></td>
                </tr>
                <tr>
                    <th scope="row">Minimum Amount of Players</th>
                    <td>{{ $game->min_players }}</td>
                </tr>
                <tr>
                    <th scope="row">Maximum Amount of Players</th>
                    <td>{{ $game->max_players }}</td>
                </tr>
                <tr>
                    <th scope="row">Minimum Age</th>
                    <td>{{ $game->min_age }}</td>
                </tr>
                <tr>
                    <th scope="row">Maximum Age</th>
                    <td>{{ $game->max_age }}</td>
                </tr>
                <tr>
                    <th scope="row">Manufacturer</th>
                    <td>
                        <a href="/manufacturers/{{ $game->manufacturer_id }}" target="_blank">{{ $game->manufacturer->name }}</a>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">
                        last updated {{ $game->updated_at}}
                    </td>
                </tr>
            </tfoot>
        </table>
    </section>
@endsection