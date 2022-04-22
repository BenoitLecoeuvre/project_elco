@extends('layouts.base')

@section('content')
<section class="ec">
    <div class="intro_ec">
        <h2>
            Vous êtes clients chez nous ?<br>
            Gagnez du temps et mettez en ligne vos documents depuis votre propre espace dédié.
        </h2>
        <img src="./img/espaceclient.jpg" alt="dessin compta">
    </div>

    <div class="content_ec">
        <p>
            La comptabilité a connu une importante transition vers le numérique ces dernières années.
            Formidable outil pour améliorer l'efficacité des échanges et le classement des données, vous pouvez directement interagir avec votre comptable depuis l'espace client.
        </p>

        <p>
            L'espace client est réservé aux clients de la SARL Elco. Veuillez indiquer les identifiants qui vous ont été communiquées par l'entreprise pour pouvoir vous connecter.
            Intéressés par le fait de devenir client ? N'hésitez pas à nous contacter via le formulaire disponible dans la page dédiée, nous vous recontacterons rapidement.
        </p>
    </div>

    <div class="shadow"><div></div></div>

    <form action="" method="post">
        @csrf
        <h3>Connexion</h3>
        <div class="form_ec">
            <div>
                <label for="id">Identifiant</label>
                <input type="text" id="id" name="email" required>
            </div>
            <div>
                <label for="pw">Mot de passe</label>
                <input type="password" id="pw" name="password" required>
            </div>
        </div>
        <div class="form_submit">
            <div>
                <button type="submit">Connexion</button>
            </div>
        </div>
    </form>
</section>

    
@endsection