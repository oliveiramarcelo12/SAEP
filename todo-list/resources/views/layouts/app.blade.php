<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List - @yield('title')</title>

    <!-- Link para o CSS do Bootstrap via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Seu CSS customizado -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <!-- Header -->
    <header class="bg-primary text-white p-3">
        <h1 class="m-0">Gerenciamento de Tarefas</h1>
    </header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('tasks.index') }}">Todo List</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tasks.index') }}">Gerenciar Tarefas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tasks.create') }}">Cadastro de Tarefas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('users.create') }}">Cadastro de Usuários</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mt-4">
        @yield('content') <!-- A área de conteúdo específica de cada página -->
    </main>

    <!-- Footer -->
    <footer class="bg-light text-center py-3">
        <p>&copy; {{ date('Y') }} - Todos os direitos reservados.</p>
    </footer>

    <!-- Scripts do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
