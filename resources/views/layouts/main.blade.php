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
            <img src="/img/logo.png" style="height: 40px; margin-right: 10px;" alt="">
            <ul class="navbar-nav">
                <li>
                    <div class="li-css">
                        <a href="/"><img src="/img/house-door.svg" alt="Icone de uma casa">Inicio</a>
                    </div>
                </li>
                <li>
                    <div class="li-css">
                        <a href="/videos"><img src="/img/bell.svg" alt="Icone de uma casa">Ensinamentos</a>
                    </div>
                </li>
                @auth
                <li>
                    <div class="li-css">
                        <a href="/videos/create"><img src="/img/camera-video.svg" alt="Icone de uma casa">Cadastrar Vídeo</a>
                    </div>
                </li>
                <li>
                    <div class="li-css">
                        <a href="/series/create"><img src="/img/bookmark-check.svg" alt="Icone de uma casa">Cadastrar Anime</a>
                    </div>
                </li>
                @endauth
                <li>
                    <div class="li-css">
                        <a href="https://www.linkedin.com/in/andrewgpsilva/" target="blank"><img src="/img/telephone-outbound.svg" alt="Icone de uma casa">Contato</a>
                    </div>
                </li>
                @guest
                <li>
                    <div class="li-css">
                        <a href="/register"><img src="/img/shield-lock.svg" alt="icone de cadeado">Registrar</a>
                    </div>
                </li>
                <li>
                    <div class="li-css">
                        <a href="/login"><img src="/img/person.svg" alt="icone de user">Login</a>
                    </div>
                </li>
                @endguest
                @auth
                <li>
                    <div class="li-css btn-sair">
                        <form action="/logout" method="POST">
                            @csrf
                            <a href="/logout"
                            onclick="event.preventDefault();
                            this.closest('form').submit();"><img src="/img/box-arrow-in-right.svg" alt="icone para sair">
                            Sair</a>
                        </form>
                    </div>
                </li>
                @endauth
            </ul>
            @if(Request::is('/'))
            <div class="search">
                <form action="/" method="GET">
                    <div class="input-container">
                        <input type="search" name="search" class="input" placeholder="pesquise aqui..." autocomplete="off">
                            <span class="icon">
                              <svg width="19px" height="19px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="1" d="M14 5H20" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path opacity="1" d="M14 8H17" stroke="#000" stroke-widphp artith="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M21 11.5C21 16.75 16.75 21 11.5 21C6.25 21 2 16.75 2 11.5C2 6.25 6.25 2 11.5 2" stroke="#000" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path> <path opacity="1" d="M22 22L20 20" stroke="#000" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            </span>
                      </div>
                </form>
            </div>
            @endif
          </div>
        </div>
    </nav>
    <main>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
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
