<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // Campos que podem ser preenchidos em massa
    protected $fillable = [
        'user_id',
        'description',
        'sector_name',
        'priority',
        'status',
        'created_at',
    ];

    // Constantes para facilitar a manipulação de prioridades e status
    const PRIORITIES = [
        'low' => 'Baixa',
        'medium' => 'Média',
        'high' => 'Alta',
    ];

    const STATUSES = [
        'to_do' => 'A Fazer',
        'in_progress' => 'Fazendo',
        'done' => 'Pronto',
    ];

    // Relacionamento: Uma tarefa pertence a um usuário
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
