@extends('layouts.base')

@section('content')
<div class="connexion">
    <h1>Déjà un compte ? Connectez-vous 🥳 :</h1>
    <form method="post" action="/connexion">
        @csrf
        
        <div>
            <label for="email">E-mail:</label>
            <input type="email" id="email">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password">
        </div>
        <button type="submit">Connexion</button>
    </form>
</div>

<div class="inscription">
    <h1>Pas encore de compte, inscrivez-vous :</h1>
    <form method="" action="">
        <div>
            <label for="email">E-mail:</label>
            <input type="email" id="email">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password">
        </div>
        <button type="submit">Inscription</button>
    </form>
</div>
@endsection