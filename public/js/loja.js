getProducts()
renderCategories()
showTotal(0)
let prod = [];

function  getProducts () {
  return fetch('http://deliveg.herokuapp.com/produtos')
    .then(res => res.json())
    .then(res =>{
      prod = res
      renderProducts(res)
    })
}

function renderCategories() {
  const categorias = ['Legumes', 'Frutas', 'Verduras','Todos']

  categorias.forEach((categoria, index) => {
    document.getElementById('categories').innerHTML +=`
    <ul class="list-group">
      <a onclick="filterByCategory('${index+1}')">
        <li class="list-group-item list-group-item-action">${categoria}</li>
      </a>
    </ul> `
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
        <img class="card-img-top" src="img/${produto.foto}" alt="Imagem do Produto">
        <div class="card-body">
            <h5 class="nome-produto-card" id="produto-nome">${produto.nome}</h5>
            <p class="preco-card" id="produto-preco">
              R$ ${parseFloat(produto.preco).toFixed(2).replace('.', ',')} /kg
            </p>
            <button class="add" onclick="addItemToCart(
            '${produto.id_produto}',
            '${produto.preco}', 
            '${produto.nome}', 
            '${produto.descricao}')">
              adicionar
            </button>
            <button class="remove" onclick="removeItemFromCart(
            '${produto.id_produto}',
            '${produto.preco}', 
            '${produto.nome}')">
              remover
            </button>
        </div>
      </div>
    </div>` 
  })
}


// objeto ITEMS está com atributos id do produto: preco somado & nome do produto: quantidade
const ITEMS = {}
const IDS = {}
const listaDeCompras = []
let counter = 0
let TOTALDACOMPRA = 0

function addItemToCart(id, preco, nome) {
  
  if(ITEMS[id]) { 
    localStorage.setItem(nome, ++counter)
    ITEMS[id] = parseFloat(ITEMS[id]) + parseFloat(preco)
    ITEMS[nome] += 1
    IDS[id] += 1
  } else {
    counter = 1
    ITEMS[id] = parseFloat(preco)
    ITEMS[nome] = 1
    localStorage.setItem(nome, counter)
    IDS[id] = 1
  }

  listaDeCompras.push(parseFloat(preco))
  showTotal(listaDeCompras)
}

function removeItemFromCart(id, preco, nome) {
  if(!ITEMS[id]){return}

  if(ITEMS[id]) { 
    ITEMS[id] = parseFloat(ITEMS[id]) - parseFloat(preco)
    ITEMS[nome] -=1
    if(localStorage.getItem(nome) <= 0) {
      localStorage.setItem(nome, 0)
    } else {
      localStorage.setItem(nome, --counter)
    }
    IDS[id] -= 1
  }

  listaDeCompras.push(-preco)
  showTotal(listaDeCompras)
}

function showTotal(listaDeCompras) {
  if(listaDeCompras == 0) {
   return document.getElementById('total').innerHTML = `<p class="preco-card">R$ 0,00</p>`
  }

  TOTALDACOMPRA = listaDeCompras.reduce((item, t) => {
    if(item + t < 0 || item + t == NaN) return 0.00
    return item + t
  })

  document.getElementById('total').textContent = TOTALDACOMPRA.toFixed(2).replace('.', ',')
  document.getElementById('precoFinal').innerHTML = `
  <p class="preco-card">
    R$ ${parseFloat(TOTALDACOMPRA).toFixed(2).replace('.', ',')}
  </p>`
}


document.getElementById('buy').addEventListener('click', renderModal)

function renderModal() {
  document.getElementById('modal').innerHTML  = ''
  for (var key in localStorage) {
    if (localStorage.hasOwnProperty(key)) {
      if(localStorage[key] > 0) { 
        document.getElementById('modal').innerHTML += 
        `<p class="descricao-card" > ${localStorage[key]}kg de ${key}</p>`
      } 
    }
  }
}   


function sendItemstoBill() {
  let pedido = []
  for (var key in localStorage) {
    if (localStorage.hasOwnProperty(key)) {
      if(localStorage[key] > 0) { 
        pedido.push(key)
      } 
    }
  }
 const data =  {
      items:JSON.stringify(pedido),
      items_id: JSON.stringify(IDS), 
      total:TOTALDACOMPRA, 
      status:'nao-pago'
    }
  const input = document.getElementById('sendToDb')
  input.style.display = 'none'
  input.value = JSON.stringify(data)  

  localStorage.clear()
}


