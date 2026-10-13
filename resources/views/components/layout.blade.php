<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Dolce Forno' }} | Pasticceria artigianale</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">

    <nav class="navbar navbar-expand-lg navbar-dark bg-brand sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('home') }}">
                <i class="bi bi-cake2"></i> Dolce Forno
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu"
                    aria-controls="menu" aria-expanded="false" aria-label="Apri il menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Homepage</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('servizi') ? 'active' : '' }}" href="{{ route('servizi') }}">I nostri Servizi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('chi-siamo') ? 'active' : '' }}" href="{{ route('chi-siamo') }}">Chi Siamo</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="flex-grow-1">
        {{ $slot }}
    </main>

    <footer class="bg-dark text-light py-4 mt-5">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
            <span>&copy; {{ date('Y') }} Dolce Forno - Via dei Dolci 12, Verona</span>
            <span><i class="bi bi-telephone"></i> 045 123 4567 &middot; <i class="bi bi-envelope"></i> ciao@dolceforno.it</span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
