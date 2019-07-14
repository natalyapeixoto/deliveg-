@extends('layouts.app')

@section('content')
<div id="login" class="form-container">
     <form method="POST" class="form" action="{{ route('login') }}">
        @csrf
        <img class="entrar-img " src="./img/deliveg1.png" alt="logo">

            <div class="form-group row">
                <label for="email" class="email col-md-12 col-form-label text-md-left">{{ __('Email') }}</label>
                <div class="col-md-12">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="senha col-md-12 col-form-label text-md-left">{{ __('Senha') }}</label>
                <div class="col-md-12">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 offset-md-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                             {{ __('Manter Logado') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-2">
                    <button id="login-btn" type="submit" class="btn btn-primary">
                        {{ __('Entrar') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Esqueceu a senha?') }}
                         </a>
                     @endif
                </div>
            </div>
        </form>
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
