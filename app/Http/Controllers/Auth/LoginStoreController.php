<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $cred = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);
        if (!Auth::attempt($cred)) {
            $user = \App\Models\User::where('email', $cred['email'])->first();
            if (!$user) {
                return back()->withErrors(['email' => 'Пользователь с таким email не найден.']);
            } elseif (!\Illuminate\Support\Facades\Hash::check($cred['password'], $user->password)) {
                return back()->withErrors(['password' => 'Пароль неверный.']);
            }
        }

        return redirect()->intended(RouteServiceProvider::HOME);

    }
}
