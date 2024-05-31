@extends('layouts.app')

@section('title', 'Members List')

@section('content')
    <div class="container">
        <h1 class="my-4">Lista członków</h1>
        
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Imię Nazwisko</th>
                        <th>Email</th>
                        <th>Telefon</th>
                        <th>Klub</th>
                        <th>Opcje</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($members as $member)
                        <tr>
                            <td>{{ $member->id }}</td>
                            <td>{{ $member->name }}</td>
                            <td>{{ $member->email }}</td>
                            <td>{{ $member->phone }}</td>
                            <td>{{ $member->club->name }}</td>
                            <td>
                                <a href="{{ route('members.show', $member->id) }}" class="btn btn-info btn-sm mb-1">Podgląd</a>
                                <a href="{{ route('members.edit', $member->id) }}" class="btn btn-primary btn-sm mb-1">Edycja</a>
                                <form action="{{ route('members.destroy', $member->id) }}" method="POST" style="display: inline;">
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
        <a href="{{ route('members.create') }}" class="btn btn-primary mb-3">Dodaj Członka</a>
    </div>
@endsection
