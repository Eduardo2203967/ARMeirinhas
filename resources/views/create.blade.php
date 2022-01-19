@extends('app')

@section('content')
  
<div class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    @if (session('message'))
                        <h5 class="alert alert-success">{{ session('message') }}</h5>
                    @endif

                    @if ($errors->any())
                        <ul class="alert alert-warning">
                            @foreach ($errors->all() as $error)
                            <li> {{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <div class="card">
                        <div class="card-header">
                            <h4>Adicionar Mensagem
                                <a href="{{ url('duvida') }}" class="btn btn-danger float-end">VOLTAR</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('duvida') }}" method="POST">
                                @csrf

                                <div class="mb-3">
                  <label> Nome </label>
                  <input type="text" name="nome_duv" class="form-control">
                </div>
                <div class="mb-3">
                  <label> E-mail </label>
                  <input type="text" name="email_duv" class="form-control">
                </div>
                <div class="mb-3">
                  <label> Mensagem </label>
                  <input type="text" name="msg_duv" class="form-control">
                </div>
                <div class="mb-3">
                  <button type="submit" class="btn btn-primary"> Salvar Dúvida</button>
                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection