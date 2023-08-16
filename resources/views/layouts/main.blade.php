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
            <a class="navbar-brand text-logo" href="/"><img src="/img/logo.png" style="height: 40px;" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <ul class="navbar-nav">
                <li>
                    <div class="li-css">
                        <img src="/img/house-door.svg" alt="Icone de uma casa">
                        <a href="/">Inicio</a>
                    </div>
                </li>
                <li>
                    <div class="li-css">
                        <img src="/img/bell.svg" alt="Icone de uma casa">
                        <a href="/">Novidades</a>
                    </div>
                </li>
                <li>
                    <div class="li-css">
                        <img src="/img/bookmark-check.svg" alt="Icone de uma casa">
                        <a href="/series/create">Sugestões</a>
                    </div>
                </li>
                <li>
                    <div class="li-css">
                        <img src="/img/telephone-outbound.svg" alt="Icone de uma casa">
                        <a href="https://www.linkedin.com/in/andrewgpsilva/" target="blank">Contato</a>
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
