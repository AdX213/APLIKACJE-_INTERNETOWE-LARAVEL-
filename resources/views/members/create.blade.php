@extends('layouts.app')

@section('title', 'Add Member')

@section('content')
    <div class="container">
        <h1 class="my-4">Dodaj członka</h1>
        <form action="{{ route('members.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nazwa</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Telefon</label>
                <input type="text" name="phone" id="phone" class="form-control">
            </div>
            <div class="mb-3">
                <label for="club_id" class="form-label">Klub</label>
                <select name="club_id" id="club_id" class="form-control">
                    @foreach ($clubs as $club)
                        <option value="{{ $club->id }}">{{ $club->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Dodaj członka</button>
        </form>
    </div>
@endsection
