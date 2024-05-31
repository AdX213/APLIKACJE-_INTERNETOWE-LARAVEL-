@extends('layouts.app')

@section('title', 'Edit Club')

@section('content')
    <div class="container">
        <h1 class="my-4">Edytuj Klub</h1>
        <form action="{{ route('clubs.update', $club->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nazwa</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $club->name }}" required>
            </div>
            <div class="mb-3">
                <label for="location" class="form-label">Miejsce</label>
                <input type="text" name="location" id="location" class="form-control" value="{{ $club->location }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Opis</label>
                <textarea name="description" id="description" class="form-control" rows="3" required>{{ $club->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Aktualizuj</button>
        </form>
    </div>
@endsection
