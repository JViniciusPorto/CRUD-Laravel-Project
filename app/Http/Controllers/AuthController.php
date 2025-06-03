<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required'
        ]);

        if (
            $credentials['email']    === 'meu@email.com' &&
            $credentials['password'] === 'A123@'
        ) {
            return redirect()->route('colaborador.create');
        }

        return back()->withInput()->with('erro', 'Email ou senha incorretos');
    }
}