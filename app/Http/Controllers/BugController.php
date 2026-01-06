<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BugController extends Controller
{
    public function store(Request $request)
    {
        $dados = $request->only(['titulo', 'descricao']);

        return response()->json([
            'id' => 1,
            ...$dados,
            'status' => 'aberto',
            'created_at' => now()->toISOString(),
        ], 201);
    }
}
