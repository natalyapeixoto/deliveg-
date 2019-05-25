    
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Perfil</title>
  <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  
  <link rel="stylesheet" href="../css/navbar.css">
  <link rel="stylesheet" href="../css/perfil.css">
  <link rel="stylesheet" href="./css/footer.css">
  <link rel="stylesheet" href="../css/app.css">
</head>
<body>

    @include('navbar')

  <div class="container-perfil">

    <main class="display">

      <section class="cadastro hide" id="cadastro">
      <div class="section__title">
            <h2>Dados Cadastrais</h2>
        </div>
        <p class="cadastro__nome">Empresa X</p>
        <p class="cadastro__cnpj">45645644/0001-2</p>
        <p class="cadastro__endereço">Rua Maria Borba, 67</p>
        <p class="cadastro__tel">Telefone 11 898986969</p>
      </section>

      <section id="historico" class='hide'>
        <div class="section__title">
            <h2>Histórico de compras</h2>
        </div>
        <table>
          <thead>
            <tr>
              <td>Código</td>
              <td>Pedido</td>
              <td>Data</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>CXXY-1212</td>
              <td>40kg batata, 5kg alface, 10gramas de oregano</td>
              <td>12/08/2018</td>
            </tr>
          </tbody>
        </table>
      </section>

    </main>
  </div>

   @include('footer')

  <script src="../js/app.js"></script>
  
</body>
</html>