@extends('app')

@section('content')
<main class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Registar</h3>
                    <div class="card-body">
                        <form action="{{ route('user.registration') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" name="name" placeholder="Nome" id="name" class="form-control" value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            
                            <div class="form-group mb-3">
                                <input type="text" name="apelido" placeholder="Apelido" id="apelido" class="form-control" value="{{ old('apelido') }}">
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-2">
                                <input type="text" name="email" placeholder="Email" id="email_address" class="form-control" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-2">
                                <input type="password" name="password" placeholder="Password" id="password" class="form-control">
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-2">
                                <input type="password" name="password_confirmation" placeholder="Confirme a Password" id="password_confirmation" class="form-control">
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            <div>
                                    <h6 class="text-end">Já tens uma conta? <a href="{{ route('login') }}"> Loga-te</a></h6>
                                </div>

                            

                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-warning btn-block">Registar!</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</main>
@endsection