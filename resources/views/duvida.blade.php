@extends('app')

@section('content')
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Endereço</div>
          <div class="text-one">ESTG</div>
          <div class="text-two">Instituto Politécnico de Leiria</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Contacto</div>
          <div class="text-one">913456789</div>
          <div class="text-two">919876543</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">2203967@ipleiria.pt</div>
          <div class="text-two">2201257@ipleiria.pt</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Envia-nos a tua dúvida!</div>
        <p>Se tiveres com dificuldades, ou não encontrares solução para qualquer problema, não hesites em contactar-nos.</p>
      <form action="#">
        <div class="input-box">
          <input type="text" placeholder="Insira o seu nome">
        </div>
        <div class="input-box">
          <input type="text" placeholder="Insira o seu email">
        </div>
        <div class="input-box message-box">
          <input type="text" placeholder="Escreva a sua mensagem">
        </div>
        <div class="button">
          <input type="button" value="Enviar" >
        </div>
      </form>
    </div>
    </div>
  </div>

@endsection