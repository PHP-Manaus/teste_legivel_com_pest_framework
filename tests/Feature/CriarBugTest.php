<?php

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('cria um bug com sucesso', function () {
    $response = $this->postJson('/api/bugs', [
        'titulo' => 'Erro ao salvar formulário',
        'descricao' => 'O sistema retorna erro 500 ao submeter',
    ]);

    $response
        ->assertStatus(201)
        ->assertJsonStructure([
            'id',
            'titulo',
            'descricao',
            'status',
            'created_at',
        ]);
});
