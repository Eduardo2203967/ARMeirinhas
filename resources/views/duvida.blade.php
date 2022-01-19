@extends('app')

@section('content')
  
  <div class="py-4">
    <div class="container">
      <div class="row">

          @if (session('message'))
          <h5>{{ session('message')}} </h5>
          @endif


        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4> Adicionar Comentário
                <a href=" {{url('duvida/create') }}" class="btn btn-primary float-end">Adicionar Comentário</a>
              </h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nome completo</th>
                      <th>Email</th>
                      <th>Mensagem</th>    
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($duvida as $item)
                      <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nome_duv }}</td>
                        <td>{{ $item->email_duv }}</td>
                        <td>{{ $item->msg_duv }}</td>
                        <td><a href="{{ url('duvida/'.$item->id) }}" class="btn btn-info btn-sm">Mostrar</a><td>
                        <td><a href="{{url('duvida/' .$item->id. '/edit') }}" class="btn btn-success btn-sm">Editar</a></td>
                        <td>
                          <form action="{{ url('duvida/'.$item->id) }}" method="POST">
                            @csrf 
                            @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm">Apagar</a>
                          </form>
                      </tr>
                      @endforeach
                  </tbody>
                  </table>
                </div>
              </div>
            </div>
            </div>
          </div>
      </div>
    </div>
  </div>

@endsection