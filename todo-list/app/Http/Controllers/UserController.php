<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;



class UserController extends Controller
{
    // Exibir o formulário de cadastro
    public function create()
    {
        return view('users.create');
    }

    // Armazenar o usuário
    public function store(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed', // password_confirmation deve ser o campo de confirmação
        ]);

        // Criar o usuário
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Criptografa a senha
        ]);

        // Redirecionar com uma mensagem de sucesso
        return redirect()->route('register.create')->with('success', 'Cadastro concluído com sucesso');
    }
}
