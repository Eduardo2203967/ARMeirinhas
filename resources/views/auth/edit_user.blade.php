@extends('app')


@section('styles')
    <link href="{{ asset('css/edit_user.css') }}" rel="stylesheet">
@endsection

@section('content')
<form method="POST" action="{{ route('users.update', $user) }}">
	@csrf
	@method('put')
	<div class="container">
	<div class="row gutters">
	<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
	<div class="card1 h-100">
		<div class="card-body">
			<div class="account-settings">
				<div class="user-profile">
					<div class="user-avatar">
						<img src="{{ asset('img/man.png') }}" alt="Nome utilizador">
					</div>
					<h5 class="user-name">(Nome utilizador)</h5>
					<h6 class="user-email">(email do utilizador)</h6>
				</div>
			</div>
		</div>
	</div>
	</div>
		<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
		<div class="card h-100">
			<div class="card-body2">
				<div class="row gutters">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<h6 class="mb-2 text-warning">Informações pessoais</h6>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="first_name">Primeiro Nome</label>
							<input type="text" name="name" class="form-control" id="first_name" placeholder="Primeiro nome" value="{{ old('first_name', $user->name) }}" >
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="last_name">Último nome</label>
							<input type="text" name="apelido" class="form-control" id="last_name" placeholder="Último nome" value="{{ old('last_name', $user->apelido) }}">
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="eMail">Email</label>
							<input type="email" class="form-control" id="eMail" placeholder="Introduzir email" value="{{ old('last_name', $user->email) }}">
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="phone">Número telemóvel</label>
							<input type="text" class="form-control" id="phone" placeholder="Introduzir número telemóvel">
						</div>
					</div>
				</div>
				<div class="row gutters">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<h6 class="mt-3 mb-2 text-warning">Endereço</h6>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="Street">Morada</label>
							<input type="name" class="form-control" id="Street" placeholder="Introduzir morada">
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="ciTy">Cidade</label>
							<input type="name" class="form-control" id="ciTy" placeholder="Introduzir cidade">
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="zIp">Código postal</label>
							<input type="text" class="form-control" id="zIp" placeholder="xxxx-xxx">
						</div>
					</div>
				</div>
				<div class="row gutters">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="text-right">
							<button type="button" id="submit" name="submit" class="btn btn-secondary">Cancelar</button>
							<button type="submit" id="submit" name="submit" class="btn btn-warning">Atualizar</button>
						</div>
					</div>
				</div>
			</div>
		</div> 

	</div>
	</div>
	</div>
</form>

@endsection