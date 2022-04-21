<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    public function formulaire(){ // affiche le formulaire 
          return view('connexion');
    }


    public function traitement (Request $request) // traitement du formulaire 
    {
        request() -> validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
       // authentification des utilisateurs 
        $resultat = auth() -> attempt([
            'email' => request('email'),
            'password' => request('password'),
        ]);

        if($resultat){
            return redirect('/mon-compte');
        }
        // renvoyer à la page précédente , l'email et permet d'afficher les erreurs.
        return back()->withInput()->withErrors([
            'email'=> 'vos identifiants sont incorrects.'
        ]);
        

        return 'traitement formulaire connexion';
    }

}
