<head>
    <meta charset="UTF-8">
    <title>Panneau d'administration</title>
    <link rel="stylesheet" href="{{url('css/main.css')}}">
    <link rel="stylesheet" href="{{url('css/admin.css')}}">
    <link rel="stylesheet" href="{{url($style)}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>    
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <header id="header_admin">
        <div>
            <img class="logo_elco" src="../img/logo_elco_small.png" alt="logo elco">
        </div>
        <div id="admin_nav">
            <div>
                <a href="/"><img src="../img/logo_home.png" class="logo_home" alt="home"></a>
            </div>
            <div>
                <h3>Panneau d'administration</h3>
            </div>
        </div>
    </header>

    <main> 
        @yield('content')
    </main>
</body>