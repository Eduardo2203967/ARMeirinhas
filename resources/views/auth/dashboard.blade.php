@extends('app')

@section('content')

    @if (Session::has('success'))
    <div class="alert alert-success">
        <i class="fas fa-check-circle"></i> {{ Session::get('success') }}
    </div>
    @endif

    <div class="container mt-5" style="max-width: 500px">
        <div class="d-grid">
            <h1 class="text-center">Sessão Iniciada!</h1>
          <a href="{{ route('logout') }}" class="btn btn-danger">Terminar Sessão</a>
        </div>  
    </div>

@yield('content')
@endsection