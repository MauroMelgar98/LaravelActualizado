<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function mostrarLogin()
    {
        return view('auth.login');
    }
    public function iniciarSesion(Request $request)
    {
        $credenciales = $request -> validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);

        if (Auth::attemp($credenciales)){ //Compara el correo y la contraseña con el usuario almacenado en la BD
            $request->session()-> regenerate();//Genera un nuevo token de sesion despues del login y ayuda a prevenir ataques de fijacion de sesion

        return redirect()
        -> intended ('/vehiculos')
        -> with ('exito','Bienvenido al sistema');
        }

        return back()
        -> withErrors ([
            'email' => 'El correo o la contraseña son incorrectos'
        ])
        -> onlyInput('email');
    }
    Public function cerrarSesion(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
        -> route('login')
        -> with('Exito','Sesion Cerrada exitosamente');

    }




}
