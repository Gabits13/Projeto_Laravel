<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .hero {
        background: url('{{ asset("imgs/img1.jpg") }}') no-repeat center center/cover;
        color: white;
        text-align: center;
        padding: 100px 0;
    }
</style>

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

    <!-- Seção Hero com Imagem de Fundo -->
    <header class="hero">
        <div class="container">
            <h1>Bem-vindo ao Meu Site</h1>
            <p style="font-size: 30px;" class=" ">Explore os serviços e conheça meu trabalho!</p>
            <a href="{{ route('servicos') }}" class="btn btn-light btn-lg">Meus Serviços</a>
        </div>
    </header>

    <!-- Conteúdo -->
    <div class="container text-center my-5">
        <h2>O que você encontra aqui?</h2>
        <p>Confira as seções para mais informações:</p>
        <div class="row mt-4">
            <div class="col-md-4">
                <a href="{{ route('sobrenos') }}" class="btn btn-outline-primary btn-lg w-100">Sobre Nós</a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('contato') }}" class="btn btn-outline-success btn-lg w-100">Fale Conosco</a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('portifolio') }}" class="btn btn-outline-warning btn-lg w-100">Meu Portfólio</a>
            </div>
        </div>
    </div>

    <!-- Rodapé -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2025 GSantos. Todos os direitos reservados.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
