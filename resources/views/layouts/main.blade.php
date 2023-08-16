<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="shortcut icon" href="/img/favicon.png" type="image/x-icon">
    <title>@yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-css">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarNav">
            <img src="/img/logo.png" style="height: 40px; margin-right: 40px;" alt="">
            <ul class="navbar-nav">
                <li>
                    <div class="li-css">
                        <a href="/"><img src="/img/house-door.svg" alt="Icone de uma casa">Inicio</a>
                    </div>
                </li>
                <li>
                    <div class="li-css">
                        <a href="/"><img src="/img/bell.svg" alt="Icone de uma casa">Novidades</a>
                    </div>
                </li>
                <li>
                    <div class="li-css">
                        <a href="/series/create"><img src="/img/bookmark-check.svg" alt="Icone de uma casa">Sugerir Anime</a>
                    </div>
                </li>
                <li>
                    <div class="li-css">
                        <a href="https://www.linkedin.com/in/andrewgpsilva/" target="blank"><img src="/img/telephone-outbound.svg" alt="Icone de uma casa">Contato</a>
                    </div>
                </li>
            </ul>
          </div>
        </div>
    </nav>
    <main>
        <div>
            <div class="flash-msg" id="msgContainer">
                @if (session('msg'))
                    <p>{{ session('msg') }}</p>
                @endif
            </div>
            @yield('content')
        </div>
    </main>
    <footer>
        <h5>&copy; Todos os direitos reservados a Andrew Silva</h5>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="/js/main.js"></script>
</body>
</html>
