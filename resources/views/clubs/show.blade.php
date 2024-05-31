@extends('layouts.app')

@section('title', 'Szczegóły Klubu')

@section('content')
    <div class="container">
        <h1 class="my-4">{{ $club->name }}</h1>
        <p><strong>Miejsce:</strong> {{ $club->location }}</p>
        <p><strong>Opis:</strong> {{ $club->description }}</p>
        <a href="{{ route('clubs.edit', $club->id) }}" class="btn btn-primary">Edytuj</a>
    </div>
@endsection
