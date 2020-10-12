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
    <a class="navbar-brand" href="{{url('/chaves')}}"><img src="{{asset('/image/logo.png')}}" alt="Logo"
                                                           class="imgLogo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" >
            <li class="nav-item active menu">
                <a class="nav-link" href="{{url('/chaves')}}">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item menu">
                <a class="nav-link" href="#">Chaves das Salas</a>
            </li>
            <li class="nav-item menu">
                <a class="nav-link" href="#">Chaves Miltimidia</a>
            </li>

        </ul>
    </div>
</nav>
<div class="container my-5">
    @yield('content')
</div>


<footer>
    <div class="card text-white bg-primary mb-3" style="max-width: 100%">
        <div class="card-header" style="text-align: center">
            © 2020 - {{date('Y')}}<br/>
            Caiocof todos os direitos reservado<br/>
            Orgulhosamente desenvolvido com Laravel®
        </div>
    </div>
</footer>

</body>
</html>
