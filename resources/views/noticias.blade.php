@extends('app')

@section('styles')
<link href="{{ asset('css/noticias.css') }}" rel="stylesheet">
@endsection

@section('content')
<body class="noticias-body">
    
<form action="POST">
<section id="main-noticia">
    <div id="left-conteudo-noticia">
        <div id="header-noticia">
            <h1>Últimas Notícias</h1>
        </div>
        <!-- Banner 1-->
        <div id="conteudo-noticia">
            <!-- Zona Superior Banner -->
            <div id="left-conteudo-noticia">
                <div id="txt-categoria">
                    <h2>Categoria</h2>
                </div>
                <div id="imagem-not">
                    <img src="img/noticia1.jpg" alt="background1">
                </div>
                <!-- Zona Inferior Banner -->
                <div id="txt-not">
                    <div id="txt-data">
                        <h5>Data</h5>
                    </div>
                    <div id="txt-title">
                        <h3>Título</h3>
                    </div>
                    <div id="txt-descri">
                        <h2>Descrição</h2>
                    </div>
                </div>
            </div>
            <!-- Banner 2-->
            <div id="right-conteudo-noticia">
                <div id="txt-categoria">
                    <h2>{{$noticias->first()->categoria_noticia}}</h2>
                </div>
                <div id="imagem-not">
                    <img src="{{$noticias->first()->img_noticia}}" alt="background1">
                </div>
                <!-- Zona Inferior Banner -->
                <div id="txt-not">
                    <div id="txt-data">
                        <h5>18 setembro 2021</h5>
                    </div>
                    <div id="txt-title">
                        <h3>{{$noticias->first()->titulo_noticia}}</h3>
                    </div>
                    <div id="txt-descri">
                        <h4>{{$noticias->first()->descri_noticia}}</h4>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <div id="right-noticia">
        <div id="classificacao-header">
            <!-- Zona Classificação -->
            <h1>Classificação</h1>
        </div>
        <!-- Zona Inferior Classificação -->
        <div id="tabela-classificacao">
            <table style="width: 100%; text-align: center;">
                <tr>
                    <th>#</th>
                    <th>Equipas</th>
                    <th>V</th>
                    <th>D</th>
                    <th>E</th>
                    <th>PT</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>ARM</td>
                    <td>10</td>
                    <td>3</td>
                    <td>0</td>
                    <td>30</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>EXE</td>
                    <td>9</td>
                    <td>4</td>
                    <td>1</td>
                    <td>28</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>QWE</td>
                    <td>8</td>
                    <td>5</td>
                    <td>0</td>
                    <td>24</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>SLB</td>
                    <td>7</td>
                    <td>6</td>
                    <td>0</td>
                    <td>21</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>FCP</td>
                    <td>6</td>
                    <td>7</td>
                    <td>0</td>
                    <td>18</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>SCP</td>
                    <td>5</td>
                    <td>8</td>
                    <td>2</td>
                    <td>17</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>CBF</td>
                    <td>4</td>
                    <td>9</td>
                    <td>0</td>
                    <td>12</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>SC</td>
                    <td>3</td>
                    <td>10</td>
                    <td>0</td>
                    <td>9</td>
                </tr>
            </table>
        </div>
    </div>



</section>
</form>
</body>

@endsection