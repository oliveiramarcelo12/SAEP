{{-- resources/views/home.blade.php --}}

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - To Do List</title>

    <!-- Link para o Bootstrap (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">To Do List</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tasks.index') }}">Gerenciar Tarefas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tasks.create') }}">Criar Tarefa</a>
                    </li>
                    <li class="nav-item">
                    <a href="{{ route('users.create') }}" class="btn btn-info">Cadastrar Usuário</a>


                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Conteúdo da Página -->
    <div class="container mt-5">
        <h1 class="text-center">Bem-vindo ao Gerenciador de Tarefas!</h1>
        <p class="text-center">Este é um sistema simples para gerenciar suas tarefas. Abaixo você pode visualizar, cadastrar e gerenciar suas tarefas.</p>

        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Cadastrar Tarefa</h5>
                        <p class="card-text">Crie novas tarefas para se organizar melhor.</p>
                        <a href="{{ route('tasks.create') }}" class="btn btn-primary">Criar Tarefa</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Gerenciar Tarefas</h5>
                        <p class="card-text">Visualize e atualize o status das tarefas já criadas.</p>
                        <a href="{{ route('tasks.index') }}" class="btn btn-success">Gerenciar Tarefas</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Cadastrar Usuário</h5>
                        <p class="card-text">Cadastre um novo usuário para acessar o sistema.</p>
                        <a href="{{ route('users.create') }}" class="btn btn-info">Cadastrar Usuário</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light py-4 mt-5">
        <div class="container text-center">
            <p>&copy; {{ date('Y') }} To Do List - Todos os direitos reservados</p>
        </div>
    </footer>

    <!-- Scripts do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
