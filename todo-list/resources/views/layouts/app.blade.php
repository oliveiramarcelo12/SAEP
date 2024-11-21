<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Tarefas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-dark text-white">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="#">Gerenciamento de Tarefas</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users.create') }}">Cadastro de Usuários</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('tasks.create') }}">Cadastro de Tarefas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('tasks.index') }}">Gerenciar Tarefas</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <main class="container mt-4">
        @yield('content')
    </main>

    <footer class="bg-light text-center py-3 mt-5">
        <p class="mb-0">&copy; {{ date('Y') }} Gerenciamento de Tarefas. Todos os direitos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
