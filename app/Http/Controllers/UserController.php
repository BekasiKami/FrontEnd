<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class UserController extends Controller
{
    public function logout()
    {
        auth()->user()->tokens->each(function ($token, $key) {
            $token->delete();
        });
        return response()->json([
            'message' => 'Logged out successfully!',
            'status_code' => 200
        ], 200);
    }
}
