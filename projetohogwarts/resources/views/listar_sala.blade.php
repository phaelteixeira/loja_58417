@section('body')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nome</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    @foreach($sala as $s)
        <tr>       
            <td>{{$s->id}}</td>
            <td>{{$s->nome}}</td>
            <td>
            <form action = "{{route('salas.destroy', $s)}}" method = "POST">
                @csrf
                <a class = "btn btn-success" href="{{route('salas.edit', $s)}}">Editar</a>
                @method('DELETE')
                <button type = "submit" class = "btn btn-danger">Excluir</button>
            </form>  
            </td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection