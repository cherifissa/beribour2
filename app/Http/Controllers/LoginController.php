<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function login(Request $request)
    {
        // dd($request);
        $maxAttempts = 4;
        $sessionKey = 'login_attempts';
        $sessionLifetime = 30;

        $attempts = session($sessionKey, 0);

        if ($attempts == $maxAttempts) {
            return back()
                ->withErrors(['erreur' => 'Trop de tentatives de connexion. Veuillez réessayer ultérieurement.'])
                ->withInput(['numero_whatsapp']);
        }

        $validatedData = $request->validate([
            'id' => 'required|string',
        ]);

        $user = User::where('id', $validatedData['id'])->first();

        if ($user) {
            dd($user);
            session([$sessionKey => 0]);
            return redirect()->intended('/');
        } else {
            $attempts++;
            session([$sessionKey => $attempts], 30);
            return back()
                ->withErrors(['erreur' => 'L\'ID saisi est incorrect'])
                ->withInput(['id']);
        }
    }
}
