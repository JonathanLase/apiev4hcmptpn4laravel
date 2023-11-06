<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\RegisterResource;

class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $userCreate = User::create($request->validated());

        return new RegisterResource($userCreate);
    }

    public function login(LoginRequest $request)
    {
        if (!Auth::attempt($request->validated())) {
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        }

        $user = User::where('niksap', $request->niksap)->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'Login Success',
            'access_token' => $token,
            'token_type' => 'Bearer Token'
        ]);
    }

    public function logout()
    {
        Auth::user()->tokens->delete();
        return response()->json([
            'message' => 'Logout Success'
        ]);
    }
}
