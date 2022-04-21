<head>
    <meta charset="UTF-8">
    <title>Panneau d'administration</title>
    <link rel="stylesheet" href="{{url('css/main.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>    
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">
</head>

<header id="header_admin">
    <div>
        <img class="logo_elco" src="./img/logo_elco_small.png" alt="logo elco">
    </div>
    <div id="admin_nav">
        <div>
            <a href="/"><img src="./img/logo_home.png" class="logo_home" alt="home"></a>
        </div>
        <div>
            <h3>Panneau d'administration</h3>
        </div>
    </div>
</header>
<section id="section_admin">
    <h2>Ajouter un nouveau client</h2>
    <form method="post" action="">
        @csrf
        <div>
            <label for="mail">E-Mail</label>
            <input type="email" id="mail" name="email" required>
        </div>
        <div>
            <label for="id">Identifiant</label>
            <input type="text" id="id" name="name" required>
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <input type="text" id="password" name="password" required>
        </div>
        <div>
            <button type="submit">Valider</button>
        </div>
    </form>

    <div class="shadow"><div></div></div>
</section>
<section id="contact_admin">
    <h2>Messages reçus</h2>
    <table>
        <thead>
            <tr>
                <th class="number number_size">#</th>
                <th>Date</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Société</th>
                <th id="consult">Consulter</th>
                <th class="number number_size"><img src="./img/logo_delete.png"></th>
            </tr>
        </thead>
        <tbody id="admin_data">
        @foreach ($contacts as $contact)
            <tr>
                <td class="number_size">{{ $contact->id }}</td>
                <td>{{ $contact->created_at }}</td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->first_name }}</td>
                <td>{{ $contact->firm }}</td>
                <td><button type="button">Voir les détails</button></td>
                <td class="number_size"> <a href="#"><p id="delete_data">x</p></a></td>
            </tr>
        @endforeach
    </table>