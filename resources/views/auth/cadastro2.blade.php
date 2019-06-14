@extends('layouts.base')
@section('content')

<div id="cadastro" class="form-container">
<form method="POST" action="{{ route('register') }}">
@csrf        
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