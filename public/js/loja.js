getProducts()
renderCategories()
let prod = [];
function  getProducts () {
  return fetch('http://localhost:8000/produtos')
    .then(res => res.json())
    .then(res =>{
      prod = res
      renderProducts(res)
    })

}

function renderCategories() {
  const categorias = ['Legumes', 'Verduras', 'Frutas', 'Todos']
  categorias.forEach((categoria, index) => {
    console.log(categoria, index)
    document.getElementById('categories').innerHTML +=`
    <ul class="list-group">
          <a onclick="filterByCategory('${index+1}')"><li class="list-group-item list-group-item-action">${categoria}</li></a>
    </ul> 
    `
  })
}

function filterByCategory(index) {
  console.log(index)
  if(index == 4) {
    return  renderProducts(prod)
  }
 var filter =  prod.filter(item => {
    if(index == item.id_categoria) {
      return item 
    }
  })
  renderProducts(filter)
}

function renderProducts(produtos) {
  document.getElementById('produtos-wrapper').innerHTML = ''
    if (produtos <= 0) return document.getElementById('produtos-wrapper').innerHTML = 'nenhum produto nesta categoria'
    produtos.forEach(produto => {
      document.getElementById('produtos-wrapper').innerHTML += `
      <div class="col-md-4 col-sm-6 col-xs-1" >
      <div class="card">
      <img class="card-img-top" src="img/alface-1.jpg" alt="Imagem do Produto">
      <div class="card-body">
          <h5 class="nome-produto-card" id="produto-nome">${produto.nome}</h5>
          <p class="preco-card" id="produto-preco">${produto.preco}</p>
          <!-- <button class="btn btn-success" data-toggle="modal" data-target="#modal-produto">Comprar</button> -->
          <button class="add" onclick="addItemToCart('${produto.id_produto}','${produto.preco}')">adicionar</button>
          <button class="remove" onclick="removeItemFromCart('${produto.preco}')">remover</button>
      </div>
     </div>
     </div>` 
    })
}


const lista = []
function addItemToCart(id, preco) {
  ITEMS.push(id)
 lista.push(parseInt(preco))
 showTotal(lista)
}

function removeItemFromCart(preco) {
  lista.push(-preco)
  showTotal(lista)
}

function showTotal(lista) {
  const total = lista.reduce((item, t)=>{
    if(item+t <0 || item+t == NaN) return 0.00
    return item+t
  })
  TOTALDACOMPRA = total
  document.getElementById('total').textContent = total.toFixed(2).replace('.', ',')
}

const buyButton =  document.getElementById('buy');
var TOTALDACOMPRA;
var ITEMS =[];


buyButton.addEventListener('click', sendItemstoBill)
function sendItemstoBill() {
  console.log('oi')

$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
    type: 'POST',
    dataType: 'json',
    url: 'http://localhost:8000/pedidos',
})

return $.ajax({
    data: {items:'ITEMS',total:10},
}).then(res => console.log(res))
  

}