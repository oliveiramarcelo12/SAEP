<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;


// Página Inicial
Route::get('/home', function () {
    return view('home');  // Retorna a view home.blade.php
})->name('home');

// Usuários
Route::get('users/create', [UserController::class, 'create'])->name('users.create');
Route::post('users', [UserController::class, 'store'])->name('users.store');

// Tarefas
Route::get('tasks', [TaskController::class, 'index'])->name('tasks.index'); // Para listar as tarefas
Route::get('tasks/create', [TaskController::class, 'create'])->name('tasks.create'); // Para mostrar o formulário de criação de tarefas
Route::post('tasks', [TaskController::class, 'store'])->name('tasks.store'); // Para armazenar a nova tarefa

Route::get('tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
Route::put('tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');


// Exibir todos os usuários
Route::get('users', [UserController::class, 'index'])->name('users.index');
