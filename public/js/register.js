let name = document.querySelector("#name")
let email = document.querySelector("#email")
let password = document.querySelector("#password")
let passwordConfirm = document.querySelector("#password-confirm")
let documento = document.querySelector("#documento")
let rua = document.querySelector('#rua')
let numero = document.querySelector('#numero')
let cep = document.querySelector('#cep')
let cidade = document.querySelector('#cidade')
let estado = document.querySelector('#estado')
let submit = document.querySelector('#cadastro-btn')
let erro = []
var reduce = 0

name.onblur = () => {
    if(typeof erroNome !== 'undefined'){
        erroNome.innerHTML = ' '
    }
    if(name.value.length <= 5 || name.value.length >= 10 || name.value == '' ){
        erroNome = document.createElement('p')
        erroNome.setAttribute('style', 'color:red;')
        name.setAttribute('style', 'border-color:red;')                              
        erroNome.innerHTML = 'Digite o campo nome corretamente'
        name.insertAdjacentElement('beforebegin', erroNome)
        erro[0] = 1
        console.log(erro)
        validate()        
        
    } else {
        name.setAttribute('style', 'border-color:green;')                                  
        erro[0] = 0
        console.log(erro)
        validate()        

    }
}

email.onblur = () => {
    if(typeof erroEmail !== 'undefined'){
        erroEmail.innerHTML = ' '
    }

    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if(email.value.length <= 5 || !re.test(String(email.value).toLowerCase()) ){
        erroEmail = document.createElement('p')
        erroEmail.setAttribute('style', 'color:red;')
        email.setAttribute('style', 'border-color:red;')         
        erroEmail.innerHTML = 'Digite o campo email corretamente'
        email.insertAdjacentElement('beforebegin', erroEmail)
        erro[1] = 1
        console.log(erro)
        validate()        
     
    } else {
        email.setAttribute('style', 'border-color:green;')                                
        erro[1] = 0
        console.log(erro)
        validate()        
     
    }
}

password.onblur = () => {
    if(typeof erroPassword !== 'undefined'){
        erroPassword.innerHTML = ' '
    }

   if(password.value.length < 4 || password.value.length > 10 || password.value == '') {                
        erroPassword = document.createElement('p')
        erroPassword.setAttribute('style', 'color:red;')
        password.setAttribute('style', 'border-color:red;')   
        erroPassword.innerHTML = 'A senha deve ter entre 4 e 10 caracteres'
        password.insertAdjacentElement('beforebegin', erroPassword)
        console.log(erro)
        validate()        
   
     } else {
        erro[2] = 0
        password.setAttribute('style', 'border-color:green;')                          
        console.log(erro)
        validate()   
    }
}

passwordConfirm.onblur = () => {
    if(typeof erroPassword !== 'undefined'){
        erroPassword.innerHTML = ' '
    }

    if(passwordConfirm.value != password.value){
        
        erroPassword = document.createElement('p')
        erroPassword.setAttribute('style', 'color:red;')
        passwordConfirm.setAttribute('style', 'border-color:red;')   
        erroPassword.innerHTML = 'As senhas não conferem!'
        password.insertAdjacentElement('beforebegin', erroPassword)
        erro[2] = 1
        console.log(erro)
        validate()        

                      
    } else if(passwordConfirm.value.length < 4 || passwordConfirm.value.length > 10 || passwordConfirm.value == '' ) {                
        erroPassword = document.createElement('p')
        erroPassword.setAttribute('style', 'color:red;')
        passwordConfirm.setAttribute('style', 'border-color:red;')
        password.setAttribute('style', 'border-color:red;')   
        erroPassword.innerHTML = 'A senha deve ter entre 4 e 10 caracteres'
        password.insertAdjacentElement('beforebegin', erroPassword)
        erro[2] = 1
        console.log(erro)
        validate()        
        
    }
    else {        
        erro[2] = 0
        passwordConfirm.setAttribute('style', 'border-color:green;')
        password.setAttribute('style', 'border-color:green;')                          
        console.log(erro)
        validate()        
        
    }
}

var doc

function mCNPJ(doc){
    doc=doc.replace(/\D/g,"")
    doc=doc.replace(/^(\d{2})(\d)/,"$1.$2")
    doc=doc.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3")
    doc=doc.replace(/\.(\d{3})(\d)/,".$1/$2")
    return doc
}

function mCPF(doc){
    doc=doc.replace(/\D/g,"")
    doc=doc.replace(/(\d{3})(\d)/,"$1.$2")
    doc=doc.replace(/(\d{3})(\d)/,"$1.$2")
    doc=doc.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
    return doc
}

documento.onblur = () => {
    if(typeof erroDocumento !== 'undefined'){
        erroDocumento.innerHTML = ' '
    }

    if(documento.value.length == 14){
        documento.value = mCNPJ(documento.value)
        documento.setAttribute('style', 'border-color:green;')                            
        erro[3] = 0
        console.log(erro)
        validate()        
        
    } else if (documento.value.length == 11) {
        documento.value = mCPF(documento.value)
        documento.setAttribute('style', 'border-color:green;')                            
        erro[3] = 0
        validate()        
       
    }  
     else {
        erroDocumento = document.createElement('p')
        erroDocumento.setAttribute('style', 'color:red;')
        documento.setAttribute('style', 'border-color:red;')        
        erroDocumento.innerHTML = 'Quantidade de caracteres incorreta!'
        documento.insertAdjacentElement('beforebegin', erroDocumento)
        erro[3] = 1
        console.log(erro)
        validate()        
        
    }
}

rua.onblur = () => {
    if(typeof erroRua !== 'undefined'){
        erroRua.innerHTML = ' '
    }

   if(rua.value.length < 4 || rua.value.length > 80 || rua.value == '') {                
        erroRua = document.createElement('p')
        erroRua.setAttribute('style', 'color:red;')
        rua.setAttribute('style', 'border-color:red;')
        erroRua.innerHTML = 'Preencha o campo endereço corretamente!'
        rua.insertAdjacentElement('beforebegin', erroRua)
        erro[4] = 1
        console.log(erro)
        validate()        
        
    }
    else {        
        erro[4] = 0
        rua.setAttribute('style', 'border-color:green;')                            
        console.log(erro)
        validate()        
        
    }
}

numero.onblur = () => {
    if(typeof erroNumero !== 'undefined'){
        erroNumero.innerHTML = ' '
    }

   if(numero.value.length < 1 || numero.value.length > 10 || numero.value == '') {                
        erroNumero = document.createElement('p')
        erroNumero.setAttribute('style', 'color:red;')
        numero.setAttribute('style', 'border-color:red;')        
        erroNumero.innerHTML = 'Preencha o campo numero corretamente!'
        numero.insertAdjacentElement('beforebegin', erroNumero)
        erro[5] = 1
        console.log(erro)
        validate()        
        
    }
    else {        
        erro[5] = 0
        numero.setAttribute('style', 'border-color:green;')                            
        console.log(erro)
        validate()        
       
    }
}

function mCEP(cep){
    cep=cep.replace(/\D/g,"")
    cep=cep.replace(/^(\d{2})(\d)/,"$1.$2")
    cep=cep.replace(/\.(\d{3})(\d)/,".$1-$2")
    return cep
}

cep.onblur = () => {
    if(typeof errocep !== 'undefined'){
        errocep.innerHTML = ' '
    }

    if(cep.value.length == 8 || cep.value.length == 10){
        cep.value = mCEP(cep.value)
        cep.setAttribute('style', 'border-color:green;')                            
        erro[6] = 0
        console.log(erro)
        validate()        
    } else {
        errocep = document.createElement('p')
        errocep.setAttribute('style', 'color:red;')
        cep.setAttribute('style', 'border-color:red;') 
        errocep.innerHTML = 'Quantidade de caracteres incorreta!'
        cep.insertAdjacentElement('beforebegin', errocep)
        erro[6] = 1
        console.log(erro)
        validate()      
    }
}

cidade.onblur = () => {
    if(typeof errocidade !== 'undefined'){
        errocidade.innerHTML = ' '
    }

    if(cidade.value.length < 3 || cidade.value.length > 20 || cidade.value == ''){
        errocidade = document.createElement('p')
        errocidade.setAttribute('style', 'color:red;')
        cidade.setAttribute('style', 'border-color:red;')       
        errocidade.innerHTML = 'Quantidade de caracteres incorreta!'
        cidade.insertAdjacentElement('beforebegin', errocidade)
        erro[7] = 1
        console.log(erro)
        validate()        
    } else {             
        erro[7] = 0
        cidade.setAttribute('style', 'border-color:green;')                            
        console.log(erro)
        validate()        
    }   
}

estado.onblur = () => {
    if(typeof erroestado !== 'undefined'){
        erroestado.innerHTML = ' '
    }

    if(estado.value.length < 1 || estado.value == ''){
        erroestado = document.createElement('p')
        erroestado.setAttribute('style', 'color:red;')
        estado.setAttribute('style', 'border-color:red;')         
        erroestado.innerHTML = 'Quantidade de caracteres incorreta!'
        estado.insertAdjacentElement('beforebegin', erroestado)
        erro[8] = 1
        console.log(erro)
        validate()        
    } else {             
        erro[8] = 0
        estado.setAttribute('style', 'border-color:green;')                            
        console.log(erro)
        validate()        
    }   
}
let botaoEnviar = document.querySelector('.botao')

function validate(){
    reduce = erro.reduce(myFunc)
    if(erro.length == 9 && reduce == 0){
    botaoEnviar.innerHTML =
        `
        <button id="cadastro-btn" type="submit" class="btn btn-primary">
        Enviar Cadastro!
        </button>
    `    
    }
}

function myFunc(total, num) {
    return total + num;
  }
  
