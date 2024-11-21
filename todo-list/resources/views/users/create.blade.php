@extends('layouts.app')

@section('content')
<h2>Cadastro de Usuários</h2>
<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nome</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
        @error('name')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
        @error('email')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
@endsection
