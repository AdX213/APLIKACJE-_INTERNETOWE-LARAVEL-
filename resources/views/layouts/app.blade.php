<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Link do plików CSS Bootstrapa -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Dodaj tutaj inne metatagi, arkusze stylów, skrypty JS itp. -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1;
        }

        .footer {
            text-align: center;
            background-color: #264ddc; 
            color: black;
        }
    </style>
</head>
<body>
    <header>
        <!-- Nagłówek aplikacji -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}">Zarządzanie klubem wędkarskim</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('clubs.index') }}">Kluby</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('members.index') }}">Członkowie</a>
                        </li>
                        <!-- Dodaj tutaj inne elementy menu nawigacyjnego -->
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Zaloguj</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Zarejestruj</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Wyloguj
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="py-4 container">
        @yield('content')
    </main>

    <footer class="footer mt-auto py-3">
        <div class="container">
            <span class="text-muted"> &copy; {{ date('Y.m.d') }}</span>
        </div>
    </footer>

    <!-- Link do plików JavaScript Bootstrapa -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Dodaj tutaj inne skrypty JS, jeśli są potrzebne -->
</body>
</html>
