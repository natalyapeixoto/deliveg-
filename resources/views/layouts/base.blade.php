<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ config('app.name', 'Deliveg') }}</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<header  id="main-header">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="/" title="Deliveg">
            <img src="./img/logo2.jpeg" alt="Logo Deliveg" width="auto" height="40px">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="navbarSupportedContent" class="navbar-right collapse navbar-collapse">
            <ul class="navbar-nav" >
                <li class="nav-item navbar-notlogged">
                    <a class="link-green" href="/loja" title="Loja">Loja</a>
                </li>
                <li class="nav-item navbar-notlogged">
                    <a class="link-green" href="/perfil">Perfil</a>
                </li>
                <li class="nav-item navbar-notlogged">
                    <a class="link-green" href="/entrar">Entrar</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
    <body>
         @yield('content')

        <footer class="text-muted text-center text-small">
            <p class="mb-1">© 2019 Deliveg</p>
        </footer>
        <script src='../js/app.js'></script>
    </body>
</html>