<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Exibir todas as tarefas
    public function index()
    {
        $tasks = Task::all();  // Buscar todas as tarefas
        return view('tasks.index', compact('tasks'));
    }

    // Exibir a página para criar uma nova tarefa
    public function create()
    {
        return view('tasks.create');
    }

    // Criar uma nova tarefa
    public function store(Request $request)
    {
        // Validar os dados
        $request->validate([
            'description' => 'required|string|max:255',
            'sector' => 'required|string|max:100',
            'priority' => 'required|in:baixa,média,alta',
        ]);

        // Criar a tarefa no banco de dados
        Task::create([
            'description' => $request->description,
            'sector' => $request->sector,
            'priority' => $request->priority,
            'status' => 'a fazer', // Definir status inicial
        ]);

        // Redirecionar para a lista de tarefas com uma mensagem de sucesso
        return redirect()->route('tasks.index')->with('success', 'Cadastro concluído com sucesso');
    }

    // Exibir o formulário para editar uma tarefa
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    // Atualizar uma tarefa
    public function update(Request $request, Task $task)
    {
        // Validar os dados
        $request->validate([
            'description' => 'required|string|max:255',
            'sector' => 'required|string|max:100',
            'priority' => 'required|in:baixa,média,alta',
            'status' => 'required|in:a fazer,fazendo,pronto', // Garantir que o status seja válido
        ]);

        // Atualizar a tarefa no banco de dados
        $task->update([
            'description' => $request->description,
            'sector' => $request->sector,
            'priority' => $request->priority,
            'status' => $request->status,
        ]);

        // Redirecionar para a lista de tarefas com uma mensagem de sucesso
        return redirect()->route('tasks.index')->with('success', 'Tarefa atualizada com sucesso');
    }

    // Excluir uma tarefa
    public function destroy(Task $task)
    {
        // Excluir a tarefa
        $task->delete();

        // Redirecionar para a lista de tarefas com uma mensagem de sucesso
        return redirect()->route('tasks.index')->with('success', 'Tarefa excluída com sucesso');
    }
}
