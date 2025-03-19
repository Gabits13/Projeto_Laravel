<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Meu Site')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a style="color: orange;" class="navbar-brand" href="{{ route('principal') }}">GSantos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('principal') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('sobrenos') }}">Sobre Nós</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contato') }}">Contato</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('servicos') }}">Serviços</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('portifolio') }}">Portfólio</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Conteúdo das páginas -->
    @yield('content')

    <!-- Rodapé -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2025 GSantos. Todos os direitos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
