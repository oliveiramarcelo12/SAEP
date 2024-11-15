<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'descricao',
        'nome_do_setor',
        'prioridade',
        'data_de_cadastro',
        'status',
    ];

    protected $casts = [
        'data_de_cadastro' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
