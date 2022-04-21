<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        // Vérifier les erreurs
        request()->validate([
            'name' => 'required|min:3|max:20',
            // 'email' => 'required|email',
        ]);

        // S'il n'y a pas d'erreurs, on crée la catégorie
        $category = Contact::create([
            'name' => request('name'),
            'first_name' => request('first_name'),
            'firm' => request('firm'),
            'mail' => request('mail'),
            'phone' => request('phone'),
            'message' => request('message'),
        ]);

        return redirect('/contact')->with('status', 'Votre formulaire a bien été envoyé. Vous serez recontacté par mail très prochainement.');
    }

    
}
