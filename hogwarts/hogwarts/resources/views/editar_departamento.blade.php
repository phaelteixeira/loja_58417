<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Listagem de Sala</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/css_style.css')}}" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="icon" href="../favicon.ico" type="image/x-icon" />
</head>
<body>
    <table>
    <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">Nome</th>
        <th scope="col">Coordenador</th>
        <th scope="col">Sala</th>
        </tr>
    </thead>
    <tbody>
        $ClasseSala = Sala::all();
        @foreach($ClasseSala as $variavel)
            <tr>       
                <td>{{$variavel->id}}</td>
                <td>{{$variavel->nome}}</td>
                <td>{{$variavel->coordenador}}</td>
                <td>{{$variavel->sala}}</td>
                <td>
                </form>  
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
</body>
</html>