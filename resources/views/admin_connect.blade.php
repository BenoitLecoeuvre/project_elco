@extends('layouts.admin_header')
@section ('content')
<section>

    <form method="post">
        @csrf
        <p>Vous souhaitez vous connecter au panneau d'administration.<br> 
            Vous devez avoir les droits requis pour cela. Veuillez vous connecter:</p>
        <div>
            <div class="div_align">
                <label for="name">Utilisateur:</label>
                <input type="text" id="name">
            </div>
            <div class="div_align">
                <label for="password">Mot de passe:</label>
                <input type="password" id="password">
            </div>
        </div>
        <div>
            <button type="submit">Connexion</button>
        </div>
    </form>
</section>
@endsection