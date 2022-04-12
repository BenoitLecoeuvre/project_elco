<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('css/main.css')}}">
</head>
<body>

<header>
        <div class="nav1">
            <div class="social_icons">
                <img src="{{url('img/logo-facebook.png')}}">
                <img src="{{url('img/linkedin.png')}}">
            </div>
            <div>
                <button><a href="/connexion">Connexion</button>
            </div>
        </div>

        <nav>
            <ul>
                <li><a href="/">Accueil</a></li>
                <li><a href="/services">Nos services</a></li>
                <li><a href="/presentations">Qui sommes-nous ?</a></li>
            </ul>
            <img src="{{url('img/logo_elco_small.png')}}">
            <ul>
                <li><a href="/contact">Nous contacter</a></li>
                <li><a href="/client">Espace client</a></li>
            </ul>
        </nav>
    </header>

    @yield('content')

<footer>
    <div class="coord_footer">
        <p>SARL ELCO <br>
        Comptabilité et expertise</p>
        <p>2 rue de la flamengrie, <br>
        02510 Hannappes</p>
    </div>
    <div class="nav_footer">
        <ul>
            <li><a href="/">Accueil</a></li>
            <li><a href="#">Plan du site</a></li>
            <li><a href="#">Mentions légales</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </div>
</footer>   

</body>
</html>