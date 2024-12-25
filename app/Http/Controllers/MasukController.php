<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MasukController extends Controller
{
    public function login()
    {
        return view('web.login');
    }

    public function authenticate(Request $request)
    {
        // Remove dd() in production code
        // dd($request->all());

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Use Hash::check to compare the plain password with the hashed password
        $peserta = Peserta::where('email', $request->email)->first();

        if ($peserta && Hash::check($request->password, $peserta->password)) {
            // If credentials are correct, regenerate session and redirect
            $request->session()->put('user_name', $peserta->name);
            $request->session()->put('user_id', $peserta->id);
            $request->session()->regenerate();

            return redirect()->intended('/beranda');
        }

        // If credentials do not match, return back with error
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function lgout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
