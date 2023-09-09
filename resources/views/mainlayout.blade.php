<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('title') </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body class="antialiased">
        <h2>
            <p align='center'> Eventos </p> 
        <br>
        </h2>
        <ul class="nav nav-pills nav-fill gap-2 p-1 small bg-primary rounded-5 shadow-sm" id="pillNav2" role="tablist" style="--bs-nav-link-color: var(--bs-white); --bs-nav-pills-link-active-color: var(--bs-primary); --bs-nav-pills-link-active-bg: var(--bs-white);">
            @auth
            <li class="nav-item" role="presentation">
            <button class="nav-link active rounded-5" id="create-tab" data-bs-toggle="tab" type="button" role="tab" aria-selected="true"> <a href="/events/create"> Incluir </a> </button>
            </li>
            <li class="nav-item" role="presentation">
            <button class="nav-link rounded-5" id="delete-tab" data-bs-toggle="tab" type="button" role="tab" aria-selected="false"> Excluir</button>
            </li>
            <li class="nav-item" role="presentation">
            <button class="nav-link active rounded-5" id="list-tab" data-bs-toggle="tab" type="button" role="tab" aria-selected="false"> <a href="/list"> Lista eventos </a> </button>
            </li>
            @endauth
            @guest
            <li class="nav-item" role="presentation">
            <button class="nav-link active rounded-5" id="login-tab" data-bs-toggle="tab" type="button" role="tab" aria-selected="false"> <a href="/login"> Entrar </a> </button>
            </li>
            <li class="nav-item" role="presentation">
            <button class="nav-link active rounded-5" id="register-tab" data-bs-toggle="tab" type="button" role="tab" aria-selected="false"> <a href="/register"> Resistro </a> </button>
            </li>
            @endguest
            <li class="nav-item" role="presentation">
            <button class="nav-link active rounded-5" id="home-tab" data-bs-toggle="tab" type="button" role="tab" aria-selected="false"> <a href="/"> Home </a> </button>
            </li>
            <li class="nav-item" role="presentation"> 
                <form action="/logout" method="POST">
                    @csrf
                    <a href="/logout" class="btn btn-default" onclick="event.preventDefault();
                        this.closest('form').submit();"> Sair </a>
                </form>
            </li>
        </ul>
        
        <main>
        <container class="fluid">
            <div class="row">
                @if (session('msg'))
                    <p class="msg">{{ session('msg')}}</p>
                @endif
                @yield('content')
            </div>
        </container>
        </main>
        
        <footer> 
            <br>
            <br>
            <br>
            <p> Meus eventos &copy; 2023</p>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    </body>
</html>
