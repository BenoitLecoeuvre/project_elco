<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ConnexionController extends Controller
{
    public function index(){ // affiche la page de l'espace client
        return view('client', [
            'style' => 'css/client.css',
            'title' => 1,
            'title_text' => 'ESPACE CLIENT'
        ]);
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/admin');
        }
 
        return redirect()->intended('/client')->with('delete_status', 'Le mot de passe '.$credentials->password.' est incorrect');;
        /*return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');*/
    }
}
