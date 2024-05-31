@extends('layouts.app')

@section('title', 'Edit Member')

@section('content')
    <div class="container">
        <h1 class="my-4">Edycja członka klubu</h1>
        <form action="{{ route('members.update', $member->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nazwa</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $member->name }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $member->email }}" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Telefon</label>
                <input type="text" name="phone" id="phone" class="form-control" value="{{ $member->phone }}">
            </div>
            <div class="mb-3">
                <label for="club_id" class="form-label">Klub</label>
                <select name="club_id" id="club_id" class="form-control">
                    @foreach ($clubs as $club)
                        <option value="{{ $club->id }}" {{ $member->club_id == $club->id ? 'selected' : '' }}>{{ $club->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Aktualizuj członka klubu</button>
        </form>
    </div>
@endsection
