@extends('layouts.app')

@section('title', 'Editar Tarefa')

@section('content')
    <h2>Editar Tarefa</h2>

    <form action="{{ route('tasks.update', $task) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Descrição -->
        <label for="description">Descrição da Tarefa:</label>
        <input type="text" id="description" name="description" value="{{ old('description', $task->description) }}" required>
        @error('description')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br>

        <!-- Setor -->
        <label for="sector">Setor:</label>
        <input type="text" id="sector" name="sector" value="{{ old('sector', $task->sector) }}" required>
        @error('sector')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br>

        <!-- Prioridade -->
        <label for="priority">Prioridade:</label>
        <select name="priority" id="priority" required>
            <option value="baixa" {{ old('priority', $task->priority) == 'baixa' ? 'selected' : '' }}>Baixa</option>
            <option value="média" {{ old('priority', $task->priority) == 'média' ? 'selected' : '' }}>Média</option>
            <option value="alta" {{ old('priority', $task->priority) == 'alta' ? 'selected' : '' }}>Alta</option>
        </select>
        @error('priority')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br>

        <!-- Status -->
        <label for="status">Status:</label>
        <select name="status" id="status" required>
            <option value="a fazer" {{ old('status', $task->status) == 'a fazer' ? 'selected' : '' }}>A Fazer</option>
            <option value="fazendo" {{ old('status', $task->status) == 'fazendo' ? 'selected' : '' }}>Fazendo</option>
            <option value="pronto" {{ old('status', $task->status) == 'pronto' ? 'selected' : '' }}>Pronto</option>
        </select>
        @error('status')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br>

        <button type="submit">Salvar Alterações</button>
    </form>
@endsection
