@extends('layouts.base')

@section('content')

<div class="container" style="margin-top: 120px;">
    <div class="row">
        <div class="col-md-3 col-sm-12" id="categories">
         
        </div>
    <div class="col-md-9 col-sm-12">
        <section id="produtos-wrapper" class="row" >

        </section>
    </div>
</div>
</div>

<div id="modal-produto" class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content" >
    <div class="modal-header">
     <h5 class="modal-title" id="exampleModalLongTitle">Finalizar Compra</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <div class="row" >
      <div class="col-md-8 col-sm-12">
          <h5 class="nome-produto-card">Itens Selecionados:</h5>
          <div id='modal'>

          
          
          
      </div>
      <p id="precoFinal"></p> 
      <a type="button" class="btn btn-success" id="sendToDb" href='/pagamento'>Finalizar Compra</a>
      </div>
        </div>
      </div>
    </div>
  </div>
</div>
@csrf
<div id='cart'>

    <button  class="btn btn-continuar" data-toggle="modal" data-target="#modal-produto" id="buy">Ver carrinho</button>
    <div class='cart__content'>
    <h2>Valor Total R$</h2><p id='total'></p>
    </div>
  </div>


</body>
</html>
@endsection