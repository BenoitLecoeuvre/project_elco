<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ELCO Comptabilité</title>
    <link rel="stylesheet" href="{{url('css/main.css')}}">
    <link rel="stylesheet" href="{{url($style)}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>    
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

    <header>
        <div class="nav1">
            <div class="social_icons">
                <a href="https://www.facebook.com"><img src="img/logo-facebook.png"></a>
                <a href="https://www.linkedin.com"><img src="img/linkedin.png"></a>
            </div>
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn">Connexion</button>
                <div id="myDropdown" class="dropdown-content">
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
                </div>
            </div>
        </div>

        <nav>
            <div class="responsive">
                <div class="hamburger-menu responsive">
                    <input id="menu__toggle" type="checkbox" />
                    <label class="menu__btn" for="menu__toggle">
                        <span></span>
                    </label>

                    <ul class="menu__box">
                        <li><a class="menu__item" href="/">Accueil</a></li>
                        <li><a class="menu__item" href="/services">Nos services</a></li>
                        <li><a class="menu__item" href="/presentations">Qui sommes-nous ?</a></li>
                        <li><a class="menu__item" href="/contact">Nous contacter</a></li>
                        <li><a class="menu__item" href="/client">Espace client</a></li>
                    </ul>
                </div>
            </div>

            <div>
                <ul>
                    <li><a href="/">Accueil</a></li>
                    <li><a href="/services">Nos services</a></li>
                    <li><a href="/presentations">Qui sommes<br>-nous ?</a></li>
                </ul>
            </div>
            <div id="nav_img">
                <img src="{{url('img/logo_elco_small.png')}}" alt="logo_elco">
            </div>
            <div>
                <ul>
                    <li><a href="/contact">Nous <br>contacter</a></li>
                    <li><a href="/client">Espace client</a></li>
                </ul>
            </div>
        </nav>
    </header>


    <main> 
        @if($title)
        <section class="titre">
            <div class="phantom">
            </div>
            <div class="titre_text">
                <h1>
                    {{$title_text}}
                </h1>
            </div>
            <div class="violetlogo">
                <img src="./img/titre.jpg">
            </div>
        </section>
        @endif

        @yield('content')
    </main>

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

    <script>
        /* When the user clicks on the button, 
        toggle between hiding and showing the dropdown content */
        function myFunction() {
          document.getElementById("myDropdown").classList.toggle("show");
        }
        
        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
          if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
              var openDropdown = dropdowns[i];
              if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
              }
            }
          }
        }
    </script>

</body>
</html>