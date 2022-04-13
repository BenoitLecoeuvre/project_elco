@extends('layouts.base')

@section('content')

<main>
    <section class="titre">
        <div class="phantom">
        </div>
        <div class="titre_text">
            <h1>
                CONNEXION
            </h1>
        </div>
        <div class="violetlogo">
            <img src="./img/titre.jpg">
        </div>
    </section>
</main>

  <div class="connexion">
    <h1>Déjà un compte ? Connectez-vous 🥳 :</h1>
    <form method="" action="">
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