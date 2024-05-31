@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Witaj </div>

                    <div class="card-body">
                        <p>Witaj, {{ Auth::user()->name }}!</p>
                        <p>Zostałes zalogowany poprawnie</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
