<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiAuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);

        if (!$token = auth('api')->attempt($credentials)) {
            return response()
                ->json(['error' => 'Unauthorized'], 401);
        }

        return response()
            ->json([
                'token' => $token,
                'type' => 'bearer',
                'expires' => auth('api')->factory()->getTTL() * 60,
            ]);
    }
}
