@extends('app')

@section('styles')
    <link href="{{ asset('css/socios.css') }}" rel="stylesheet">
@endsection

@section('content')

  <!-- banner -->
  <header class="header-socios">

    <div class="img-wrapper">
      <img src="img/socio_cartao.jpg" />
    </div>

    <div class="banner">
      <img src="img/logo2 - cópia.png" alt="">
      <h1>Torna-te um dos <br/> nossos!</h1>
      <button class="btn-socios btn1-socios">Torna-te sócio</button>
      <button class="btn-socios btn1-socios">Pagar Quotas</button>
    </div>

  </header>

  <!-- socios ARMeirinhas -->
  <div class="title-cards">
		<h2>Sócios <span>ARM</span>eirinhas</h2>
	</div>

  <div class="container-card">
    <div class="card">
      <figure>
        <img src="img/avatar.png">
      </figure>
      <div class="contenido-card">
        <h3>Faz-te sócio</h3>
        <p>Por 20€, com oferta de <span>24€ em quotas + Cachecol ARM.</span></p>
        <button class="btn3-socios btn2-socios">Aderir</button>
      </div>
    </div>

    <div class="card">
      <figure>
        <img src="img/documents.png">
      </figure>
      <div class="contenido-card">
        <h3>Paga as quotas</h3>
        <p>Online, a qualquer hora, <span>rápido e 100% seguro,</span> aceda já!</p>
        <button class="btn3-socios btn2-socios">Pagar</button>
      </div>
    </div>
    
    <div class="card">
      <figure>
        <img src="img/credit-card.png">
      </figure>
      <div class="contenido-card">
        <h3>Adere ao Débito Direto</h3>
        <p>Com Débito Direto ativo, as <span>quotas estão sempre em dia.</span></p>
        <button class="btn3-socios btn2-socios">Aderir</button>
      </div>
    </div>
  </div>


  <!-- Tabela de preços -->
  <h1>Tabela precos sócios</h1>

  <div class="columns">
    <ul class="preco">
      <li class="header1">Basico</li>
      <li class="grey"><span>9.99€/</span> mês</li>
      <li>Item 1</li>
      <li>Item 1</li>
      <li>Item 1</li>
      <li>Item 1</li>
      <li class="grey"><button class="btn4-socios btn5-socios">Aderir</button></li>
    </ul>
  </div>
  
  <div class="columns1">
    <ul class="preco">
      <li class="header2">Recomendado</li>
      <li class="grey"><span>24.99€/</span> mês</li>
      <li>Item 1</li>
      <li>Item 1</li>
      <li>Item 1</li>
      <li>Item 1</li>
      <li class="grey"><button class="btn4-socios btn5-socios">Aderir</button></li>
    </ul>
  </div>
  
  <div class="columns">
    <ul class="preco">
      <li class="header1">Premium</li>
      <li class="grey"><span>49.99€/</span> mês</li>
      <li>Item 1</li>
      <li>Item 1</li>
      <li>Item 1</li>
      <li>Item 1</li>
      <li class="grey"><button class="btn4-socios btn5-socios">Aderir</button></li>
    </ul>
  </div>


  @endsection
