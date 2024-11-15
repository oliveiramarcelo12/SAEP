<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Relacionamento com User
            $table->string('descricao');
            $table->string('nome_do_setor');
            $table->enum('prioridade', ['baixa', 'media', 'alta']);
            $table->timestamp('data_de_cadastro')->useCurrent();
            $table->enum('status', ['a fazer', 'fazendo', 'pronto'])->default('a fazer');
            $table->timestamps();
        });
        
    }


};
