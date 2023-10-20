<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function register(Request $request)
    {
        $fields = $request->validate([
            'username' => 'required|string|unique:users,username',
            'first_name' => 'required',
            'last_name' => 'required',
            'password' => 'required|string|confirmed'
        ]);


        $user = User::create([
            'username' => $fields['username'],
            'first_name' => $fields['first_name'],
            'last_name' => $fields['last_name'],
            'password' => bcrypt($fields['password'])
        ]);

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function login(Request $request)
    {
        $fields = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string'
        ]);


        if (!Auth::attempt($fields)) {
            return response([
                'message_title' => 'Login Failed!',
                'message' => 'Incorrect username or password.'
            ], 401);
        }

        $request->session()->regenerate();
        $token = Auth::user()->createToken('myapptoken')->plainTextToken;
        $response = [
            'user' => Auth::user(),
            'token' => $token
        ];

        return response($response, 201);
    }

    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();

        auth('web')->logout();
        $request->session()->invalidate();

        return [
            'message' => 'Logged out.'
        ];
    }
}
