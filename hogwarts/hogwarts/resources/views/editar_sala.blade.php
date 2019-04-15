<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Listagem de Salas</title>
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
                    <h3>Listagem de Salas</h3>            
                    <form>                  
                        <div class="form-group">
                        <table>
                          <thead>
                              <tr>
                              <th scope="col">id</th>
                              <th scope="col">Nome</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach($salas as $s)
                                  <tr>       
                                      <td>{{$s->id}}</td>
                                      <td>{{$s->nome}}</td>
                                      <td>
                                      </td>
                                  </tr>
                              @endforeach
                          </tbody>
                          </table>
                          </div>
                          <form action = "{{route('salas.store')}}" method = "POST">
                              <div class="col-md-6 col-sm-6 col-md-6">
                                  <a href="/home" class="btn btn-md btn-danger btn-block">Voltar</a>
                                  <button type="submit" class="btn btn-md btn-success btn-block">Alocar</button>
                              </div>
                          </form>
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
