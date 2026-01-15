$(document).ready(function(){
$("#cpf").mask("000.000.000-00")
$("#cnpj").mask("00.000.000/0000-00")
$("#rg").mask("999.999.999-W", {
    translation: [
        'W': {
				pattern: /[X0-9]/
		}
    ],
    reverse: true
})

$("#telefone").mask("(00) 0000-0000")
$("#celular").mask("(00) 0000-00009")

$("#celular").blur(function(event){
    if($(this).val().length == 15){
        $("#celular").mask("(00) 00000-0009")
    }else{
        $("#celular").mask("(00) 0000-00009")
    }
}

$("#cep").mask("00000-00")
})


        /* js/jquery.
        js/jquery.mask.min
        */
