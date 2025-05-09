<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/setup', function () {
    $credentials = [
        'email' => 'admin@admin.com',
        'password' => 'password',
    ];

    // Intentar autenticar al usuario
    if (!Auth::attempt($credentials)) {
        // Crear un nuevo usuario si no existe
        $user = new \App\Models\User;
        $user->name = 'Admin';
        $user->email = $credentials['email'];
        $user->password = Hash::make($credentials['password']);
        $user->save();
    }

    // Si se logró autenticar al usuario, crear los tokens
    if (Auth::attempt($credentials)) {
        
        // si lo quito jala, este tmb   $token = $request->user()->createToken($user->email . '_Token')->plainTextToken
       // $user = Auth::user();

        // Crear tokens para diferentes roles
        $adminToken = $user->createToken('admin-token', ['create', 'update', 'delete']);
        $updateToken = $user->createToken('update-token', ['create', 'update']);
        $basicToken = $user->createToken('basic-token');

        // Retornar los tokens
        return [
            'admin' => $adminToken->plainTextToken,
            'update' => $updateToken->plainTextToken,
            'basic' => $basicToken->plainTextToken,
        ];
    }

    // Si no se puede autenticar
    return response()->json(['message' => 'Unauthorized'], 401);
});