<?php

namespace App\Http\Controllers;

use App\Models\User; // Importando o modelo User
use App\Models\Task; // Importando o modelo Task
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all()->groupBy('status');
        return view('tasks.index', compact('tasks'));
    }
    
    public function create()
    {
        $users = User::all();
        return view('tasks.create', compact('users'));
    }
    
    public function store(Request $request)
    {
        // Validar os dados
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'description' => 'required|string',
            'sector' => 'required|string',
            'priority' => 'required|in:baixa,média,alta',
            'status' => 'required|in:a fazer,fazendo,pronto',
        ]);
    
        // Agora você pode acessar a variável $validated
        // Exemplo de salvar a tarefa
        Task::create($validated);
    
        // Redirecionar ou retornar resposta
        return redirect()->route('tasks.index');
    }
    
    
    
    
    public function edit(Task $task)
    {
        $users = User::all();
        return view('tasks.edit', compact('task', 'users'));
    }
    
    public function update(Request $request, Task $task)
    {
        $validated = $request->validate([
            'priority' => 'required|in:baixa,média,alta',
            'status' => 'required|in:a fazer,fazendo,pronto',
        ]);
    
        $task->update($validated);
        return redirect()->route('tasks.index')->with('success', 'Tarefa atualizada com sucesso!');
    }
}
