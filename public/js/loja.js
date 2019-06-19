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
    document.getElementById('categories').innerHTML +=`
    <ul class="list-group">
          <a onclick="filterByCategory('${index+1}')"><li class="list-group-item list-group-item-action">${categoria}</li></a>
    </ul> 
    `
  })
}

function filterByCategory(index) {
  if(index == 4) return  renderProducts(prod) 
  
  const filter =  prod.filter(item => {
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
          <p class="preco-card" id="produto-preco">R$ ${produto.preco.toFixed(2).replace('.', ',')} /kg</p>
          <!-- <button class="btn btn-success" data-toggle="modal" data-target="#modal-produto">Comprar</button> -->
          <button class="add" onclick="addItemToCart('${produto.id_produto}','${produto.preco}', '${produto.nome}')">adicionar</button>
          <button class="remove" onclick="removeItemFromCart('${produto.id_produto}','${produto.preco}', '${produto.nome}')">remover</button>
      </div>
     </div>
     </div>` 
    })
}


const listaDeCompras = []

function addItemToCart(id, preco, nome) {
  if(ITEMS[id]) { 
    ITEMS[id] = parseInt(ITEMS[id]) + parseInt(preco)
    ITEMS[nome] +=1
  } else {
    ITEMS[id] = parseInt(preco)
    ITEMS[nome] = 1
  }

 listaDeCompras.push(parseInt(preco))
 showTotal(listaDeCompras)
}

function removeItemFromCart(id, preco, nome) {
  if(!ITEMS[id]){return}

  if(ITEMS[id]) { 
    ITEMS[id] = parseInt(ITEMS[id]) - parseInt(preco)
    ITEMS[nome] -=1
  }

  listaDeCompras.push(-preco)
  showTotal(listaDeCompras)
  return  console.log(ITEMS)
}

function showTotal(listaDeCompras) {
 TOTALDACOMPRA = listaDeCompras.reduce((item, t)=>{
    if(item+t <0 || item+t == NaN) return 0.00
    return item+t
  })

  document.getElementById('total').textContent = TOTALDACOMPRA.toFixed(2).replace('.', ',')
  document.getElementById('precoFinal').innerHTML = `<p class="preco-card">R$ ${parseInt(TOTALDACOMPRA).toFixed(2).replace('.', ',')}</p>`
}




var ITEMS = {}
var TOTALDACOMPRA = 0


const buyButton = document.getElementById('buy');
buyButton.addEventListener('click', sendItemstoBill)

function sendItemstoBill() {

$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
    type: 'POST',
    dataType: 'json',
    url: 'http://localhost:8000/pedidos',
})

  return $.ajax({
      data: {items:JSON.stringify(ITEMS),total:TOTALDACOMPRA},
  }).then(res => renderModal(res))

}


function renderModal(res) {

  const ids = res.items.match(/"\d"/g).join('')
  console.log(ids)
  document.getElementById('modal').innerHTML =''
 prod.forEach(item => {
  if(ids.includes(item.id_produto)) {
    
   let value = ITEMS[item.nome]
   if(!value){return}
  document.getElementById('modal').innerHTML += `
        
    <p class="descricao-card" > ${value} x ${item.nome} - ${item.descricao}  - valor do item R$ ${item.preco.toFixed(2).replace('.', ',')}</p>
          
    `
}   
})

}