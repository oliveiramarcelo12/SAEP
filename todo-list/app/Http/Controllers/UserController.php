<?php

namespace App\Http\Controllers;

use App\Models\User;  // Importando o modelo User
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
        ]);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
        ]);

        return redirect()->route('users.index');
    }
}
