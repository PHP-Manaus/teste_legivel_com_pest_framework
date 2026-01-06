<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/bugs', function (Request $request) {
    return response()->json([
        'id' => 1,
        'titulo' => $request->titulo,
        'descricao' => $request->descricao,
        'status' => 'aberto',
        'created_at' => now()->toISOString(),
    ], 201);
});
