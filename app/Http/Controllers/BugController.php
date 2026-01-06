<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BugController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'titulo' => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'The given data was invalid.',
                'errors' => $validator->errors(),
            ], 422);
        }

        return response()->json([
            'id' => 1,
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            'status' => 'aberto',
            'created_at' => now()->toISOString(),
        ], 201);
    }
}
