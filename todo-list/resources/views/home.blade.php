@extends('layouts.app')

@section('title', 'Página Inicial')

@section('content')
    <div class="container">
        <h1>Bem-vindo à página inicial!</h1>
        <p>Esta é a tela principal da sua aplicação.</p>
        
        <!-- Exemplo de link para a lista de tarefas -->
        <a href="{{ route('tasks.index') }}" class="btn btn-primary">Ver Tarefas</a>
    </div>
@endsection
