<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthUser extends Controller
{
    //
    public function registrar(Request $request)
    {
        try {
            // $request->validate([
            //     'name' => 'required|string|max:255',
            //     'email' => 'required|email|unique:users,email',
            //     'password' => 'required|string|min:8',
            // ]);

            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
            ]);

            Auth::login($user);

            return redirect('bingo')->with('success', '¡Registro exitoso! Bienvenido a la aplicación.');
        } catch (\Exception $e) {
            // Aquí manejas el error. Por ejemplo, puedes redirigir al usuario de vuelta al formulario de registro y mostrar un mensaje de error.
            return redirect('login')->with('error', 'Hubo un error durante el registro: ' . $e->getMessage());
        }
    }

    public function login(Request $request)
    {

        $credenciales = $request->only('email', 'password');
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credenciales)) {
            return redirect()->intended('/bingo');
        } else {
            return back()->withErrors(['email' => 'Credenciales incorrectas']);
        }
    }
}
