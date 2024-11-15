@extends('layouts.app')

@section('title', 'Lista de Tarefas')

@section('content')
    <!-- Mensagem de sucesso se houver -->
    @if(session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <h2>Tarefas a Fazer</h2>
<table>
    <thead>
        <tr>
            <th>Descrição</th>
            <th>Setor</th>
            <th>Prioridade</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
        @forelse($tasks->where('status', 'a fazer') as $task)
            <tr>
                <td>{{ $task->description }}</td>
                <td>{{ $task->sector }}</td>
                <td>{{ $task->priority }}</td>
                <td><a href="{{ route('tasks.edit', $task) }}">Editar</a></td>
                <td>
                    <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Nenhuma tarefa a fazer.</td>
            </tr>
        @endforelse
    </tbody>
</table>


    <h2>Tarefas em Andamento</h2>
    <table>
        <thead>
            <tr>
                <th>Descrição</th>
                <th>Setor</th>
                <th>Prioridade</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks->where('status', 'fazendo') as $task)
                <tr>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->sector }}</td>
                    <td>{{ $task->priority }}</td>
                    <td><a href="{{ route('tasks.edit', $task) }}">Editar</a></td>
                    <td>
                        <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Tarefas Concluídas</h2>
    <table>
        <thead>
            <tr>
                <th>Descrição</th>
                <th>Setor</th>
                <th>Prioridade</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks->where('status', 'pronto') as $task)
                <tr>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->sector }}</td>
                    <td>{{ $task->priority }}</td>
                    <td><a href="{{ route('tasks.edit', $task) }}">Editar</a></td>
                    <td>
                        <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
