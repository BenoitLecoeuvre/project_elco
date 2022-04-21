<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactAdmin extends Controller
{
    public function index()
    {
        return view('admin', [
            'contacts' => Contact::all(),
        ]);
    }
}
