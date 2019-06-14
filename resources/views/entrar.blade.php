@extends('layouts.base')

@section('content')


    <div id="login" class="form-container">
        <form class="form" method="POST" action='/entrar'>
        @csrf
            <img class="entrar-img " src="./img/deliveg1.png" alt="logo">
            <label  for="email" class="hidden">Email</label>
            <input id="login-email" class="form-control" type="email" name="email" placeholder="Email" required>
            <p class='login-email-error'></p>
            <label for="password" class="hidden">Senha</label>
            <input id="login-password"class="form-control" type="password" name='password' placeholder="Senha" required minlength="6" maxlength="9">
            <p class='login-password-error'></p>            
            <button id="login-btn" class='btn btn-primary text-center' type="submit">Entrar</button>
            <span id="loading-gif-login"></span>
            <a href="/cadastro" class="link-cadastro">Não tem conta? Faça seu cadastro aqui.</a>
        </form>   
    </div>
    
@endsection

