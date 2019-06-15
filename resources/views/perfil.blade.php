@extends('layouts.base')

@section('content')
  <div class="container-perfil">
    <main class="display">
    @foreach( $usuarios as $usuario )
    <div class="jumbotron">
      <h1 class="display-4">Bem vindo(a) { {{$usuario->name}} }</h1>
      <hr class="my-4">
      <h3 class="my-3">Dados Cadastrais</h3>
      <p class="cadastro__nome"><strong>Empresa</strong>: Deliveg</p>
      <p class="cadastro__cnpj"><strong>CPNJ/CPF</strong>: 45645644/0001-2</p>
      <p class="cadastro__endereço"><strong>Endereço</strong>: {{$usuario->rua}}, {{$usuario->numero}}</p>
      <p class="cadastro__tel"><strong>Telefone</strong>: 11 898986969</p>
      <hr class="my-4">
      @endforeach
      <h3 class="my-3">Histórico de compras</h3>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Código</th>
            <th scope="col">Pedido</th>
            <th scope="col">Data</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>
              40kg batata <br>
              5kg alface <br>
              10g de oregano
            </td>
            <td>12/08/2018</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>
              40kg batata
            </td>
            <td>12/08/2018</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>  
@endsection