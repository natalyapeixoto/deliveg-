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
  <link rel="stylesheet" href="../css/login.css">
  
</head>
<body>

    @include('navbar')


 
    <div id="login" class="form-container">
        <form class="form" action='/home'>
            <label  for="email">Email</label>
            <input id="login-email" class="form-control" type="email" name="email" placeholder="seu email" required>
            <p class='login-email-error'></p>
            <label for="password">Senha</label>
            <input id="login-password"class="form-control" type="password" name='password' required minlength="6" maxlength="9">
            <p class='login-password-error'></p>
            <button id="login-btn" class='btn btn-primary text-center' type="button">Entrar</button>
            <span id="loading-gif-login"></span>
            <a href="/cadastro" class="link-cadastro">Não tem conta? <br>Faça seu cadastro aqui.</a>
        </form>
    </div>
    


    @include('footer')
            
    <script src="../js/app.js"></script>
  
</body>
</html>