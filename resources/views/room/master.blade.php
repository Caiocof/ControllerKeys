<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">


    <title>Controle de Chaves</title>
</head>
<body>

<div class="topSite">
    <img src="{{asset('/image/top.png')}}" alt="Imagem do topo" class="imgTopo">
</div>
<nav class="navbar navbar-expand-lg navbar-primary bg-primary">
    <a class="navbar-brand" href="{{route('index.room')}}"><img src="{{asset('/image/logo.png')}}" alt="Logo"
                                                     class="imgLogo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active menu">
                <a class="nav-link" href="{{route('index.room')}}">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item menu">
                <a class="nav-link" href="{{route('busy.room')}}">Chaves em uso</a>
            </li>
            <li class="nav-item menu">
                <a class="nav-link" href="#">Chaves Multimídia</a>
            </li>
            <li class="nav-item menu">
                <a class="nav-link" href="{{route('logout')}}">SAIR</a>
            </li>

        </ul>
    </div>
</nav>
<div class="container">
    @yield('content')
</div>


<footer>
    <div class="card text-white bg-primary mt-3">
        <div class="card-header">
            © 2020 - {{date('Y')}}<br/>
            Caiocof todos os direitos reservado®
        </div>
    </div>
</footer>

</body>
</html>
