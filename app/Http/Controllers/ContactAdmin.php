<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\User;

class ContactAdmin extends Controller
{
    public function index()
    {
        return view('admin', [
            'contacts' => Contact::all(),
        ]);
    }

    public function store(Request $request)
    {
        // Vérifier les erreurs
        request()->validate([
            'name' => 'required|min:3|max:20',
            // 'email' => 'required|email',
        ]);

        // S'il n'y a pas d'erreurs, on crée la catégorie
        $category = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => request('password')
        ]);

        return redirect('/admin')->with('status', 'Nouveau client ajouté');
    }

}
