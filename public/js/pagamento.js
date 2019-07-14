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
  if (document.getElementById("erroCardNumber").textContent && document.getElementById("erroCardMes").textContent &&
  document.getElementById("erroCardAno").textContent && document.getElementById("erroCardCvv").textContent) {
    return
  }


    $.ajax({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url: 'http://deliveg.herokuapp.com/pagamentos',
      type: "POST",
      data: {
      status:'pago'
    }
   }).done(function(data) {
     console.log(data);
 })

 window.location="/sucesso"

}

let erro = []

const cardNumber = document.getElementById("cardNumber") 
cardNumber.addEventListener("blur", function(){
  if (cardNumber.value.length < 16) {
    document.getElementById("erroCardNumber").innerHTML="Digite um número de cartão válido"
  }
})

const cardMes = document.getElementById("cardMes") 
cardMes.addEventListener("blur", function(){
  if (cardMes.value.length < 2 && cardNumber.value <= 12) {
    document.getElementById("erroCardMes").innerHTML="Mês inválido"
  }
})

const cardAno = document.getElementById("cardAno") 
cardAno.addEventListener("blur", function(){
  if (cardAno.value.length < 2 && cardAno.value >= 19) {
    document.getElementById("erroCardAno").innerHTML="Ano inválido"
  }
})

const cardCvv = document.getElementById("cardCvv") 
cardCvv.addEventListener("blur", function(){
  if (cardCvv.value.length < 3) {
    document.getElementById("erroCardCvv").innerHTML="Cvv inválido"
  }
})

