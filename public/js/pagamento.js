function getCurrentPedido() {
  return fetch('http://deliveg.herokuapp.com/pagapedido')
    .then(res => res.json())
    .then(data => renderPedido(data))
} 

getCurrentPedido()

function renderPedido(pedido) { 
  document.getElementById('quant').innerHTML = 
  `Valor a pagar: R$${parseFloat(pedido.total).toFixed(2).replace('.', ',')}`
}

document.getElementById('pagar').onclick = pagar

function pagar() {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    type: 'POST',
    dataType: 'json',
    url: 'http://localhost:8000/pedidos',
  })
  $.ajax({
    data: {
      status:'pago'
    }
   }).done(function(data) {
     console.log(data);
 })
}