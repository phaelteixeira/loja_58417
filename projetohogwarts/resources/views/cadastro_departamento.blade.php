<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastrar Sala</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/css_style.css')}}" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="icon" href="../favicon.ico" type="image/x-icon" />

</head>
<body>
<div class="login-page">
        <div class = "container-fluid">
            <div class = "row">
                <div class = "col-md-4"></div>
                <div class = "col-md-4">
                <br>
                <div class = "div-borda">
                    <h3>Cadastro Departamento</h3>            
                    <form>                  
                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input class="form-control tf-custom ipt" type="text" id="nome"name="nome" size=20 placeholder="Digite o nome"required="" autofocus=""><br>
                            <label for="nome">Coordenador:</label>
                            <input class="form-control tf-custom ipt" type="text" id="coordenador"name="coordenador" size=30 placeholder="Digite o nome do coorenador"required="" autofocus=""><br>
                            <label for="endereço">Sala de Funcionamento:</label>
                            <input class="form-control ipt" type="text" id="sala" nome="sala" size=80 placeholder="Digite a sala"required="" autofocus=""><br>
                            <div class="col-md-6 col-sm-6 col-md-6">
                            <a href="/home" class="btn btn-md btn-danger btn-block">Cancelar</a>
                            </div>
                            <div class="col-md-6 col-sm-6 col-md-6">
                                <button href="{{route('departamentos.store')}}" type="submit" class="btn btn-md btn-success btn-block">Cadastrar</button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
                <div class = "col-md-4"></div>
            <div>
        </div>
    </div>
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>
