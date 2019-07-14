@extends('layouts.base')
@section('content')

<div id="cadastro" class="form-container">
    <form class="form" action='/home'>
        <img class="entrar-img " src="./img/deliveg1.png" alt="logo">
        <label for="nome" class="hidden">Nome</label>
        <input id="nome"class="form-control" type="text" name="nome" placeholder="Nome">
        
        <label for="email" class="hidden">Email</label>
        <input id="cadastro-email"class="form-control" type="email" name="email" placeholder="Email">                <p class='cadastro-email-error'></p>
        
        <label for="password" class="hidden">Senha</label>
        <input id="cadastro-password" class="form-control" type="password" name='password' placeholder="Senha" required minlength="6" maxlength="9" >
        <p class='cadastro-password-error'></p>
                
        <label for="password" class="hidden">Confirmação de Senha</label>
        <input id="cadastro-conf-password" class="form-control" type="password" name='password' placeholder="Confirmação de Senha" required minlength="6" maxlength="9">
        <p class='cadastro-password-conf-error'></p>
                
        <button id="cadastro-btn" class='btn btn-primary' type="submit">Cadastrar e entrar</button>
        <a href="/entrar" class="link-login">Já tem conta? Faça o seu login.</a> 
    </form> 
</div>

            
@endsection

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
