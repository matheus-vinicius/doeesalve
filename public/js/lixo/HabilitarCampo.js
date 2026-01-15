function liberar(sobre){
	var nome  = document.getElementById("nome");	
	var sobre = document.getElementById("sobrenome");

	if(nome.value != ""){
		sobre.disabled=false;
	}
}

/*
<input type="nome" id="nome" value="" onblur="liberar();" />
<input type="sobrenome" id="sobrenome" disabled="disabled" value="" />
*/

/* function RespInv(){
	 var estado = document.getElementById("estado");

	if(estado == "Selecione sua Estado"){
		 return false;
		 echo "Selecione seu estado";
	}else {
		
		header('Location: Agendar.php');
	}
}
*/

//Não funciona

/*
function LibCampo(){
	var estado = document.getElementById("estado");
	var cidade = 
}
*/