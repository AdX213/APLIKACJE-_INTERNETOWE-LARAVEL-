@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Witamy</h1>
            <p class="lead">Zarządzaj klubami wędkarskimi</p>
            <hr class="my-4">
            <p>Kliknij żeby zacząć</p>
            @guest
                <a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button">Zaloguj sie</a>
                <a class="btn btn-success btn-lg" href="{{ route('register') }}" role="button">Rejestracja</a>
            @else
                <a class="btn btn-primary btn-lg" href="{{ route('dashboard') }}" role="button">Go to Dashboard</a>
            @endguest
        </div>
    </div>
@endsection
