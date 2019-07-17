function getCurrentPedido() {
    return fetch("http://deliveg.herokuapp.com/pagapedido")
        .then(res => res.json())
        .then(data => renderPedido(data))
}

getCurrentPedido()

function renderPedido(pedido) {
    document.getElementById("quant").innerHTML = `Valor a pagar: R$${parseFloat(
        pedido.total
    )
        .toFixed(2)
        .replace(".", ",")}`
}


const cardNumber = document.getElementById("cardNumber")

cardNumber.addEventListener("blur", function(event) {
    const erroMsg = document.getElementById("erroCardNumber")
    if (cardNumber.value.length < 16) {
        erroMsg.textContent = "Digite um número de cartão válido"
        erroMsg.style.color = "red"
        erroMsg.style.display = "block"
        erroMsg.style.fontSize = "12px"
    } else {
        erroMsg.textContent = ''
    }
})

const cardMes = document.getElementById("cardMes")

cardMes.addEventListener("blur", function() {
    const erroMsg = document.getElementById("erroCardMes")
    
    if (cardMes.value.length < 2 || cardMes.value > 12) {
        erroMsg.innerHTML = "Mês inválido"
        erroMsg.style.color = "red"
        erroMsg.style.fontSize = "12px"
       
    } else {
        erroMsg.innerHTML = ""
    }
})

const cardAno = document.getElementById("cardAno")

cardAno.addEventListener("blur", function() {
    const erroMsg = document.getElementById("erroCardAno")
    
    if (cardAno.value.length < 2 || cardAno.value < 19) {

        erroMsg.innerHTML = "Ano inválido"
        erroMsg.style.color = "red"
        erroMsg.style.display = "block"
        erroMsg.style.fontSize = "12px"
    } else {
        erroMsg.innerHTML = ""
    }
})

const cardCvv = document.getElementById("cardCvv")

cardCvv.addEventListener("blur", function() {
    if (cardCvv.value.length < 3) {
        document.getElementById("erroCardCvv").innerHTML = "Cvv inválido"
        document.getElementById("erroCardCvv").style.color = "red"
        document.getElementById("erroCardCvv").style.display = "block"
        document.getElementById("erroCardCvv").style.fontSize = "12px"
    }else {
        document.getElementById("erroCardCvv").innerHTML = ""
    }
    
})

document.getElementById("pagar").onclick = pagar

function pagar() {
    if (
        document.getElementById("erroCardNumber").textContent ||
        document.getElementById("erroCardMes").textContent ||
        document.getElementById("erroCardAno").textContent ||
        document.getElementById("erroCardCvv").textContent
    ) {
        return
    }

    $.ajax({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        },
        url: "http://deliveg.herokuapp.com/pagamentos",
        type: "POST",
        data: {
            status: "pago"
        }
    }).done(function(data) {
        console.log(data)
    })

    window.location = "/sucesso"
}
