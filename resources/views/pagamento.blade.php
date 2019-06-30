<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Document</title>
</head>
<body>
  <h1 class="title">ESCOLHA FORMA DE PAGAMENTO</h1>

  <p id="quant"></p>

  <button class="btn btn-success" id="pagar">Pagar</button>

  <script src='../js/app.js'></script>
  <script src='../js/pagamento.js'></script>
</body>
</html>