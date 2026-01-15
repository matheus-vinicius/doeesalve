function ValidarNome(){
    var formulario = document.forms["formcadastro"]
     var nome = formulario.nome.value
     // var cpf = formulario.cpf.value
     var erro = false // não tem erro

     if(nome.indexOf(" ") == -1){
        alert("Preencha o nome completo")
         erro = true //quando identifica um erro 
    }

     /*if(cpf.length == 11){
        alert("Preencha o CPF corretamente")
        erro = true
    }*/

     if(erro){
         return false
     }else{
         return true
    }
}