<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        // Cari user berdasarkan email
        $user = User::where('email', $request->email)->first();

        // Periksa password
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        // Buat token Passport untuk user
        $tokenResult = $user->createToken('authToken');
        $accessToken = $tokenResult->accessToken; // Gunakan accessToken dari Passport

        return response()->json([
            'user'  => $user,
            'token' => $accessToken,
        ]);
    }
}
