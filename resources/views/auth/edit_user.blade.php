@extends('app')


@section('styles')
    <link href="{{ asset('css/edit_user.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Fábio</span><span class="text-black-50">joaninho@mail.com.my</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Editar perfil</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Nome:</label><input type="text" class="form-control" placeholder="Primeiro nome" value=""></div>
                    <div class="col-md-6"><label class="labels">Último nome:</label><input type="text" class="form-control" value="" placeholder="Último nome"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Número telemóvel:</label><input type="text" class="form-control" placeholder="Introduzir número telefone" value=""></div>
                    <div class="col-md-12"><label class="labels">Morada:</label><input type="text" class="form-control" placeholder="Introduzir morada" value=""></div>
                    <div class="col-md-12"><label class="labels">Código postal:</label><input type="text" class="form-control" placeholder="xxxx-xxx" value=""></div>
                    <div class="col-md-12"><label class="labels">Email:</label><input type="text" class="form-control" placeholder="Introduzir email" value=""></div>
            
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Guardar alterações</button></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

@endsection