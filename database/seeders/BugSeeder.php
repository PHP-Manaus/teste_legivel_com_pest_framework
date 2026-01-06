<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BugSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bugs = [
            [
                'titulo' => 'Erro ao salvar formulário',
                'descricao' => 'O sistema retorna erro 500 ao submeter o formulário de cadastro.',
                'status' => 'aberto',
                'prioridade' => 'alta',
            ],
            [
                'titulo' => 'Página não encontrada',
                'descricao' => 'Ao acessar a página de perfil, o usuário recebe um erro 404.',
                'status' => 'em progresso',
                'prioridade' => 'media',
            ],
            [
                'titulo' => 'Lentidão no carregamento',
                'descricao' => 'A página inicial demora mais de 10 segundos para carregar.',
                'status' => 'resolvido',
                'prioridade' => 'critica',
            ],
        ];

        foreach ($bugs as $bug) {
            \DB::table('bugs')->insert($bug);
        }
    }
}
