<?php

	include("Conexao.php");
	 session_start();
	//Recebendo os valores do form
	
	$hemocentro 		= $_POST['hemocentro'];
	$data 				= $_POST['data'];
	$hora				= date('h:m:s', strtotime($_POST['hora']));

	// recebendo dados da sessão

	$id_usuario			= $_SESSION['id_usuario'];

	// $alt  		= 1.78;

// var_dump($_POST);

	if ($hemocentro != ''){
		$sql = "INSERT INTO agendar (hemocentro, data, hora, id_usuario)
		VALUES ('$hemocentro', '$data', '$hora', '$id_usuario');";

		// echo $sql;
		// exit();

		$result = mysqli_query($con,$sql);

		// CODIGO PARA MOSTRAR O ERRO DURANTE A GRAVACAO NO BANCO DE DADOS
		
		var_dump(mysqli_error($con));

			if($result){
				echo "<script>
				alert('Agendado com sucesso!');
				window.location.replace
				('Index.php');
		  		</script>";
			}else{
				echo "ERRO INESPERADO: Não foi possível efetuar o agendamento";
			}
}else{
		echo "NÃO FOI POSSIVEL CADASTRAR";
	}

exit();
	

?>