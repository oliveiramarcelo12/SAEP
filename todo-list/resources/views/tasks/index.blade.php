@extends('layouts.app')

@section('content')
    <h2>Lista de Tarefas</h2>

    <div class="row">
        <div class="col-md-4">
            <h3>A Fazer</h3>
            <ul class="list-group">
                @foreach ($tasks->where('status', 'A Fazer') as $task)
                    <li class="list-group-item">
                        <strong>{{ $task->description }}</strong>
                        <p>Setor: {{ $task->sector }}</p>
                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-warning">Editar</a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-4">
            <h3>Fazendo</h3>
            <ul class="list-group">
                @foreach ($tasks->where('status', 'Fazendo') as $task)
                    <li class="list-group-item">
                        <strong>{{ $task->description }}</strong>
                        <p>Setor: {{ $task->sector }}</p>
                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-warning">Editar</a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-4">
            <h3>Pronto</h3>
            <ul class="list-group">
                @foreach ($tasks->where('status', 'Pronto') as $task)
                    <li class="list-group-item">
                        <strong>{{ $task->description }}</strong>
                        <p>Setor: {{ $task->sector }}</p>
                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-warning">Editar</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
