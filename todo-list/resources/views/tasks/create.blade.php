@extends('layouts.app')

@section('content')
<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="user_id">Usuário</label>
        <select name="user_id" id="user_id" class="form-control" required>
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="description">Descrição</label>
        <input type="text" name="description" id="description" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="sector">Setor</label>
        <input type="text" name="sector" id="sector" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="priority">Prioridade</label>
        <select name="priority" id="priority" class="form-control" required>
            <option value="baixa">Baixa</option>
            <option value="média">Média</option>
            <option value="alta">Alta</option>
        </select>
    </div>
    <div class="form-group">
    <label for="status">Status</label>
    <select name="status" id="status" class="form-control" required>
        <option value="a fazer">A Fazer</option>
        <option value="fazendo">Fazendo</option>
        <option value="pronto">Pronto</option>
    </select>
</div>

    <button type="submit" class="btn btn-primary">Criar Tarefa</button>
</form>


@endsection
