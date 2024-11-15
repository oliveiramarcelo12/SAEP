<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Rota para a tela inicial (Home)
Route::get('/', function () {
    return redirect()->route('home');  // Redireciona para a página inicial
});

// Rotas protegidas por autenticação
Route::middleware(['auth'])->group(function () {
    // Mostrar usuário
    Route::get('/user/{id}', [UserController::class, 'show'])->name('user.show');
    
    // Editar usuário
    Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
});

// Rotas para registro de usuário (sem middleware de autenticação)
Route::get('register', [UserController::class, 'create'])->name('register.create');
Route::post('register', [UserController::class, 'store'])->name('register.store');

use App\Http\Controllers\TaskController;

// Rota para exibir todas as tarefas
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');

// Rota para exibir o formulário de criação de tarefa
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');

// Rota para criar a tarefa
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');

// Rota para exibir o formulário de edição de tarefa
Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');

// Rota para atualizar a tarefa
Route::put('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');

// Rota para excluir a tarefa
Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');

// Rota para a tela inicial (Home)
Route::get('/home', function () {
    return view('home');  // Redireciona para a view 'home.blade.php'
})->name('home');

Route::get('register', [UserController::class, 'create'])->name('user.create');

// Rota para exibir o formulário de criação de usuário
Route::get('register', [UserController::class, 'create'])->name('register.create');

// Rota para armazenar os dados do usuário


Route::post('register', [UserController::class, 'store'])->name('register.store');
