<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\User;

class JWTControler extends Controller
{
    //
    public function actionLogin(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
        'revisi' => 'required'
    ]);

    $email = $request->input('email');
    $password = $request->input('password');
    $role = $request->input('role', 'Administrator'); // Default role
    $revisi = $request->input('revisi');

    // Cek user berdasarkan email dan role
    $user = User::where('email', $email)->where('role', $role)->first();

    if (!$user) {
        return response()->json([
            'success' => false,
            'message' => 'Email atau password salah.',
        ], 401);
    }

    // Validasi password
    if (!\Hash::check($password, $user->password)) {
        return response()->json([
            'success' => false,
            'message' => 'Email atau password salah.',
        ], 401);
    }

    // Buat token JWT
    $token = JWTAuth::fromUser($user);

    // Simpan parameter tambahan ke session
    session()->put('parameter', $user->sub_divisi);

    // URL redirect
    $redirectUrl = url("http://192.168.100.128:7011/request_revisi/$revisi");

    return response()->json([
        'success' => true,
        'message' => 'Login dan autentikasi berhasil.',
        'token' => $token,
        'redirect_url' => $redirectUrl,
        'user' => [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'role' => $user->role,
        ]
    ]);
}

}
