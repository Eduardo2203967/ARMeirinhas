@extends('app')

@section('content')
  
  <div class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Nome: {{ $duvida->nome_duv}} </h5>
                    <h5>Email: {{$duvida->email_duv}}</h5>
                    <h5>Mensagem: {{ $duvida->msg_duv}}</h5>
                    </div>
                </div>
            </div>
        </div>
    
@endsection