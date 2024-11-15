@extends('layouts.app')

@section('title', 'Criar Nova Tarefa')

@section('content')
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h1>Cadastro de Usuário</h1>

    <!-- Exibir mensagem de sucesso, se houver -->
    @if(session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('register.store') }}" method="POST">
        @csrf

        <!-- Nome -->
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        @error('name')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br>

        <!-- E-mail -->
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        @error('email')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br>

        <!-- Senha -->
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required>
        @error('password')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br>

        <!-- Confirmar Senha -->
        <label for="password_confirmation">Confirmar Senha:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>
        @error('password_confirmation')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
@endsection