@extends('layouts.app')

@section('content')
  <div class="container-perfil">
    <main class="display">
    @foreach( $usuarios as $usuario )
    <div class="boxPerfil">
      <h1 class="tituloPerfil"> Olá, {{$usuario->name}}!</h1>
      <hr class="my-4">
      <h3 class="my-3">Dados Cadastrais</h3>
      <p class="cadastro__cnpj"><strong>Email</strong>: {{$usuario->email}}</p>
      <p class="cadastro__endereço"><strong>Endereço</strong>: {{$usuario->rua}}, {{$usuario->numero}}</p>
      <p class="cadastro__endereço"><strong>Cidade:</strong> {{$usuario->cidade}}</p>
      <p class="cadastro__endereço"> <strong>Estado:</strong> {{$usuario->estado}}</p>
      <p class="cadastro__cnpj"><strong>CPF</strong>: {{$usuario->documento}}</p>
      <hr class="my-4">
      @endforeach

      
      <h3 class="my-3">Histórico de compras</h3>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Código</th>
            <th scope="col">Pedido</th>
            <th scope="col">Valor</th>
            <th scope="col">Data</th>
          </tr>
        </thead>
        @foreach($pedidos as $pedido)
        <tbody>
          <tr>
            <th scope="row">{{$pedido->id_pedido}}</th>
            <td>
            <?php

            $newString = preg_replace('/[^a-zç]/i', ' ', $pedido->items);
              echo $newString
              ?>
            </td>
            <td>
              R${{ $pedido->total }},00
            </td>
            <td>{{$pedido->created_at}}</td>
          </tr>
        </tbody>
      @endforeach
      </table>
    </div>
  </div>  

  <footer id="footer" class="pt-4 my-md-5 pt-md-5  ">
        <div class="row justify-content-md-center infoFooter">
          
          <div class="col-4 conhecaFooter">
            <h5>Conheça</h5>
            <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="/entrar">Entrar</a></li>
              <li><a class="text-muted" href="/cadastro">Cadastrar</a></li>
              <li><a class="text-muted" href="/#quemSomos">Quem Somos</a></li>
            </ul>
          </div> 


          <div class="col-4 forma-pagamento">
            <h3 class="formasFooter">Formas de Pagamento</h3>
            <img class="mx-auto d-block img-home" src="./img/bandeiras-de-cartao.png" alt="Cartao de Cerveja" />
            </div>   

          <div class="col-4 logoFooter fotoFooter">
            <img class="mb-2" src="./img/deliveg1.png" alt="" width="80" height="auto">
            <small class="d-block mb-3 text-muted">Deliveg © 2019</small>
          </div>
          
        </div>
        
      </footer>

        <script src='../js/app.js'></script>
    </body>
</html>
@endsection


