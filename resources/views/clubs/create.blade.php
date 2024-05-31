@extends('layouts.app')

@section('title', 'Create Club')

@section('content')
    <div class="container">
        <h1 class="my-4">Dodaj nowy klub</h1>
        <form action="{{ route('clubs.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nazwa</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="location" class="form-label">Miejsce</label>
                <input type="text" name="location" id="location" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Opis</label>
                <textarea name="description" id="description" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Utwórz Klub</button>
        </form>
    </div>
@endsection
