<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastro Funcionário</title>
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
                    <h3>Cadastro de Funcionário</h3>            
                    <form>                  
                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input class="form-control tf-custom ipt" type="text" id="nome"name="nome" size=20 required="" autofocus="" placeholder="Digite o seu nome"><br>
                            <label for="nome">Sobrenome:</label>
                            <input class="form-control tf-custom ipt" type="text" id="sobrenome"name="sobrenome" size=30 required="" autofocus="" placeholder="Digite o seu sobrenome"><br>
                            <div class="form-group">
                                <label for="sexo">Escolha seu sexo:</label>
                                <select class="form-control" id="sexo">
                                <option></option>  
                                <option>Masculino</option>
                                <option>Feminino</option>
                                <option>Outro</option>
                                </select>
                            </div>
                            <label for="endereço">Endereço</label>
                            <input class="form-control ipt" type="text" id="endereço" nome="endereço" size=80  required="" autofocus="" placeholder="Digite seu endereço"><br>
                            <label for="rub">R.U.B. (Registro Único de Bruxo)</label>
                            <input class="form-control tf-custom ipt" type="number" id="rub" name="rub" size=20  required="" autofocus="" placeholder="Digite seu RUB"><br>
                            <label for="senha">Senha</label>
                            <input class="form-control tf-custom ipt" type="password" id="senha" name="senha" size=15  required="" autofocus="" placeholder="Digite sua senha"><br>
                            <label for="senha">Confirmar Senha</label>
                            <input class="form-control tf-custom ipt" type="password" id="senha" name="senha" size=15  required="" autofocus="" placeholder="Digite sua senha novamente"><br>
                            <label for="foto">Foto</label>
                            <input type="file" id="foto" name="foto" size=200 action="recebeUpload.php"><br>
                            <div class="col-md-6 col-sm-6 col-md-6">
                                <a href="/home" class="btn btn-md btn-danger btn-block">Cancelar</a>
                            </div>
                            <div class="col-md-6 col-sm-6 col-md-6">
                                <button href="{{route('funcionarios.store')}}" type="submit" class="btn btn-md btn-success btn-block">Cadastrar</button>
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
