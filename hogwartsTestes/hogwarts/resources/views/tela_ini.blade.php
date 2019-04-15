<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hogwarts: Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="icon" href="../favicon.ico" type="image/x-icon" />

</head>
<body>
<form class="init">
        <div id="wrapper" class="toggled">
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand"> <a href="/home"> Hogwarts: Seja Bem vindo </a> </li>
                    <li> <a href="{{route('salas.create')}}">Cadastro de Sala</a> </li>
                    <li> <a href="{{route('departamentos.create')}}">Cadastro de Departamento</a> </li>
                    <li> <a href="{{route('funcionarios.create')}}">Cadastro de Funcionário</a> </li>
                    <li> <a href="{{route('salas.index')}}">Listar Salas</a> </li>
                    <li> <a href="{{route('departamentos.index')}}">Listar Departamentos</a> </li>
                    <li> <a href="{{route('funcionarios.index')}}">Listar Funcionários</a> </li>
                </ul>
        </div>
        <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</form>
</body>
</html>
