<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;

uses(DatabaseTransactions::class);

it('Validar o registro de um bug', function () {
    $entrada = [
        'titulo' => '',
        'descricao' => 'O sistema retorna erro 500 ao submeter',
    ];

    $requisicao = $this->postJson('/api/bugs', $entrada);
    $requisicao
        ->assertStatus(422)
        ->assertJsonValidationErrors(['titulo']);
});

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
