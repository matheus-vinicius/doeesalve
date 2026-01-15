function ValidarRespSelect(){

     var formulario = document.forms["formcadastro"]
     var pais = formulario.pais.value
     var erro = false

    if(pais == "selecione sua resposta"){
        erro = true
        alert("Selecione um pais diferente de:"+ pais)
    }

    if(erro){
        return false
    }else{
        return true
    }

}

/* Não esta funcionando */

/*if(pais == 'selecione sua resposta'){
            erro = true
            alert("Selecione um pais diferente de:", pais)
            // talvez precise criar uma variavel pais ou alterar o final da mensagem
        }

        if(erro){
            return false
        }else{
            return true
        }

}
*/

/* 
if(est == 'selecione sua resposta'){
        erro = true
        alert("Selecione um estado diferente de:", est)
    }
*/
// Selecione sua resposta é considerada uma resposta

/*
    https://www.w3schools.com/jsref/event_onchange.asp
    https://forum.imasters.com.br/topic/473252-evento-onchange-em-select/
    http://www.devfuria.com.br/javascript/manipulando-combobox-select-com-javascript/

    https://www.devmedia.com.br/o-que-e-json/23166
    https://www.devmedia.com.br/json-tutorial/25275

    https://www.devmedia.com.br/trabalhando-com-eventos-em-javascript/28521

    https://www.youtube.com/watch?v=dNGW7EsooCs
    https://www.youtube.com/watch?v=x6rSvf7Odlc
    https://www.youtube.com/watch?v=qPYCnebQQ6U

*/