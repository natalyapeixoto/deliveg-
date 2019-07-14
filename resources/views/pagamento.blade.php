@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <h3 id="quant"></h3>
        <div id="pagamento" class="col-xs-12 col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Pagamento
                    </h3>
                </div>
                <div class="panel-body">
                <form role="form">
                    <div class="form-group">
                        <label for="cardNumber">Cartão</label>
                        <div class="input-group">
                            <input type="tel" class="form-control" maxlength='16' id="cardNumber" placeholder="Número do Cartão"
                                required autofocus />
                                <span id="erroCardNumber"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-7 col-md-7">
                            <div id="expMonth" class="form-group">
                                <label for="expityMonth">Data</label>
                                <div class="row">    
                                    <div class="col-md-6 col-sm-12">
                                        <input type="tel" class="form-control" id="cardMes" placeholder="MM" required />
                                        <span id="erroCardMes"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <input type="tel" class="form-control" id="cardAno" placeholder="AA" required /></div>
                                        <span id="erroCardAno"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-5 pull-right">
                            <div class="form-group">
                                <label for="cvCode">
                                    CV</label>
                                <input type="password" minlength='3' class="form-control" id="cardCvv" placeholder="CV" required />
                                <span id="erroCardCvv"></span>
                            </div>
                        </div>
                      </div>
                    </form>
                </div>
            </div>
           
      
            <br/>
            <button class="btn btn-success" id="pagar">Pagar</button>
        </div>
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

<script src='/js/pagamento.js'></script>
<script src='../js/app.js'></script>
    </body>
</html>

@endsection

