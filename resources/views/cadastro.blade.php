
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Delivig | Perfil</title>

  <link rel="stylesheet" href="../css/app.css">
  <link rel="stylesheet" href="../css/navbar.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="../css/cadastro.css">
  
</head>
<body>

    @include('navbar')

<div id="cadastro" class="cadastro-form-container">
        <form class="form-cadastro">
            <div>
                <label for="nome" >Nome</label>
                <input id="nome"class="form-control" type="text" name="nome" placeholder="seu nome">
                <label for="email">Email</label>
                <input id="cadastro-email"class="form-control" type="email" name="email" placeholder="seu email">
                <p class='cadastro-email-error'></p>
                <label for="password">Senha</label>
                <input id="cadastro-password" class="form-control" type="password" name='password'required minlength="6" maxlength="9" >
                <p class='cadastro-password-error'></p>
                <label for="password">Confirmação de Senha</label>
                <input id="cadastro-conf-password" class="form-control" type="password" name='password'required minlength="6" maxlength="9">
                <p class='cadastro-password-conf-error'></p>
                <button id="cadastro-btn" class='btn btn-primary' type="submit">Cadastrar e entrar</button>
                <a href="/login" class="link-login">Já tem conta?<br> Faça o seu login.</a>
            </div>  
        </form> 
    </div>

    
    @include('footer')
            
  <script src="../js/app.js"></script>
</body>
</html>