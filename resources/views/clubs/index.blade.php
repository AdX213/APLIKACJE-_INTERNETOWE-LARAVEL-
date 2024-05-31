@extends('layouts.app')

@section('title', 'Lista Klubów')

@section('content')
    <div class="container">
        <h1 class="my-4">Lista Klubów</h1>
        
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nazwa</th>
                        <th>Miejsce</th>
                        <th>Opis</th>
                        <th>Opcje</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clubs as $club)
                        <tr>
                            <td>{{ $club->id }}</td>
                            <td>{{ $club->name }}</td>
                            <td>{{ $club->location }}</td>
                            <td>{{ $club->description }}</td>
                            <td>
                                <a href="{{ route('clubs.show', $club->id) }}" class="btn btn-info btn-sm mb-1">Podgląd</a>
                                <a href="{{ route('clubs.edit', $club->id) }}" class="btn btn-primary btn-sm mb-1">Edycja</a>
                                <form action="{{ route('clubs.destroy', $club->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm mb-1" onclick="return confirm('Jesteś tego pewny?')">Usuń</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <a href="{{ route('clubs.create') }}" class="btn btn-primary mb-3">Dodaj Klub</a>
    </div>
@endsection
