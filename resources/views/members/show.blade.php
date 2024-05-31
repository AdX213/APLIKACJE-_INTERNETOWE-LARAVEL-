@extends('layouts.app')

@section('title', 'Member Details')

@section('content')
    <div class="container">
        <h1 class="my-4">{{ $member->name }}</h1>
        <p><strong>Email:</strong> {{ $member->email }}</p>
        <p><strong>Telefon:</strong> {{ $member->phone }}</p>
        <p><strong>Klub:</strong> {{ $member->club->name }}</p>
        <a href="{{ route('members.edit', $member->id) }}" class="btn btn-primary">Edytuj</a>
    </div>
@endsection
