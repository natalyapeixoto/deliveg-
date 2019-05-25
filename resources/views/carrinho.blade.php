<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carrinho</title>

    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="../css/carrinho.css">
    <script src="../js/app.js"></script>
    

</head>
<body>

    @include('navbar')

  <div class="shopping-cart">
    <!-- Titulo -->
    <div class="title">
      Carrinho
    </div>
   
    <!-- Produto #1 -->
    <div class="item">
      <div class="buttons">
        <span class="delete-btn"></span>
        <span class="like-btn"></span>
      </div>
   
      <div class="image">
        <img  class= "fotoItem" src="imagem/banana.png" alt="" />
      </div>
   
      <div class="description">
        <span>Banana Nanica</span>
        <span>Unidade</span>
      </div>
   
      <div class="quantity">
        <button class="plus-btn" type="button" name="button">
          <div>+</div>
        </button>
        <input type="text" name="name" value="1">
        <button class="minus-btn" type="button" name="button">
        <div>-</div>
        </button>
      </div>
   
      <div class="total-price">R$ 05</div>
    </div>
   
    <!-- Produto #2 -->
    <div class="item">
      <div class="buttons">
        <span class="delete-btn"></span>
        <span class="like-btn"></span>
      </div>
   
      <div class="image">
        <img class= "fotoItem"src="imagem/brocolis.png" alt=""/>
      </div>
   
      <div class="description">
        <span>Brócolis Ninja</span>
        <span>Unidade</span>
      </div>
   
      <div class="quantity">
        <button class="plus-btn" type="button" name="button">
        <div>+</div>
        </button>
        <input type="text" name="name" value="1">
        <button class="minus-btn" type="button" name="button">
        <div>-</div>
        </button>
      </div>
   
      <div class="total-price">R$ 07</div>
    </div>
   
    <!-- Produto #03 -->
    <div class="item">
      <div class="buttons">
        <span class="delete-btn"></span>
        <span class="like-btn"></span>
      </div>
   
      <div class="image">
        <img class= "fotoItem" src="imagem/tomate.png" alt="" />
      </div>
   
      <div class="description">
        <span>Tomate Italiano</span>
        <span>KG</span>
      </div>
   
      <div class="quantity">
        <button class="plus-btn" type="button" name="button">
        <div>+</div>
        </button>
        <input type="text" name="name" value="1">
        <button class="minus-btn" type="button" name="button">
        <div>-</div>
        </button>
      </div>
      <div class="total-price">R$ 03</div>
    </div>

    <div class="total">
      <div class="preco">
      <span>Preço Total: R$ 15</span>
      </div>
      <div class="botaoDireita">
      <button class="botaoComprar" type="button" name="button">Finalizar pedido</button>
      </div>
      </div>

      
  </div>



  <link rel="stylesheet" href="../carrinho/js/script.js">
 
        @include('footer')
  


</body>
</html>