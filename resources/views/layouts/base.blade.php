<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('css/main.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>    
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

    <header>
        <div class="nav1">
            <div class="social_icons">
                <img src="img/logo-facebook.png">
                <img src="img/linkedin.png">
            </div>
            <div>
                <button><a href="/connexion">Connexion</a></button>
            </div>
        </div>

        <nav>
            <div>
                <ul id="nav_left">
                    <li><a href="/">Accueil</a></li>
                    <li><a href="/services">Nos services</a></li>
                    <li><a href="/presentations">Qui sommes-nous ?</a></li>
                </ul>
            </div>
            <div id="nav_img">
                <img src="{{url('img/logo_elco_small.png')}}">
            </div>
            <div>
                <ul id="nav_right">
                    <li><a href="/contact">Nous <br>contacter</a></li>
                    <li><a href="/client">Espace client</a></li>
                </ul>
            </div>
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
                <li><a href="/plan">Plan du site</a></li>
                <li><a href="/droit">Mentions légales</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div>
    </footer>   

</body>
</html>