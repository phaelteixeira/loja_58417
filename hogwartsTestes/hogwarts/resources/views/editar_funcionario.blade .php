<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Editar Funcionario/title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/css_style.css')}}" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="icon" href="../favicon.ico" type="image/x-icon" />
</head>
<body>
<form action = "{{route('funcionarios.update', $funcionario)}}" method = "POST" enctype="multipart/form-data">
        @csrf
        <div class = "form-group">
            <h1>Edição de Funcionarios</h1>
            <label for="nome">Nome: </label>
            <input type = "text" class = "form-control" id="nome" name="nome" {{$funcionario->nome}}>
            <label for="endereco">Endereço: </label>
            <input type = "text" class = "form-control" id="endereco" name="endereco" {{$funcionario->endereco}}>
            <label for="RUB">RUB: </label>
            <input type = "number" class = "form-control" id="RUB" name="RUB" {{$funcionario->RUB}}>
            <label for="foto">Foto: </label>
            <input type = "file" class = "form-control-file" id="foto" name="foto">
            <label for="departamento">departamento: </label>
            <select class = "form-control" name = "departamento" id="departamento">
            <select  id="departamento" name = "departamento" class="form-control">
                @foreach($departamentos as $d)
                    @if($d->id == $funcionario->departamento_id) 
                        <option selected value = {{$d->id}}> {{$d->nome}} </option>
                    @else
                        <option value = {{$d->id}}> {{$d->nome}} </option>
                    @endif
                @endforeach                
            </select>
            </select>
            <br>
            <button class = "btn btn-primary" type = "submit">Cadastrar!</button>
        </div>
    </form>
</body>
</html>