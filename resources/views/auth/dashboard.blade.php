@extends('app')

@section('content')


    <div class="container mt-5" style="max-width: 500px">
        <div class="d-grid">
            <h1 class="text-center">Sessão Iniciada!</h1>
          <a href="{{ route('logout') }}" class="btn btn-danger">Terminar Sessão</a>
        </div>  
    </div>

@yield('content')
@endsection