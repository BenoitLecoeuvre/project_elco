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
            'style' => 'css/admin.css'
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

        return redirect('/admin')->with('status', 'Un nouveau client a bien été ajouté.');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect('/admin')->with('delete_status', 'Le ticket n°'.$contact->id.' a bien été supprimée.');
    }

}
