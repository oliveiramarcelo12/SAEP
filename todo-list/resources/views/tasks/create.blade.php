@extends('layouts.app')

@section('title', 'Criar Nova Tarefa')

@section('content')
    <h2>Criar Nova Tarefa</h2>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf

        <!-- Descrição -->
        <label for="description">Descrição da Tarefa:</label>
        <input type="text" id="description" name="description" value="{{ old('description') }}" required>
        @error('description')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br>

        <!-- Setor -->
        <label for="sector">Setor:</label>
        <input type="text" id="sector" name="sector" value="{{ old('sector') }}" required>
        @error('sector')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br>

        <!-- Prioridade -->
        <label for="priority">Prioridade:</label>
        <select name="priority" id="priority" required>
            <option value="baixa" {{ old('priority') == 'baixa' ? 'selected' : '' }}>Baixa</option>
            <option value="média" {{ old('priority') == 'média' ? 'selected' : '' }}>Média</option>
            <option value="alta" {{ old('priority') == 'alta' ? 'selected' : '' }}>Alta</option>
        </select>
        @error('priority')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br>

        <button type="submit">Criar Tarefa</button>
    </form>
@endsection
