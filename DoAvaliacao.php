<?php

	include("Conexao.php");
	session_start();

	//Recebendo os valores do form
	
	$estrela 	= $_POST['estrela'];
	$opiniao 	= $_POST['opiniao'];

	// $alt  		= 1.78;

// var_dump($_POST);

	if ($estrela != ''){
		$sql = "INSERT INTO avaliar (estrela, opiniao)
		VALUES ('$estrela', '$opiniao');";

		// echo $sql;
		// exit();

		$result = mysqli_query($con,$sql);

		// CODIGO PARA MOSTRAR O ERRO DURANTE A GRAVACAO NO BANCO DE DADOS
		
		var_dump(mysqli_error($con));

			if($result){
				echo "<script>
				alert('Avaliação registrada com sucesso!');
				window.location.replace
				('Avaliacao.php');
		  		</script>";
			}else{
				echo "ERRO INESPERADO: Não foi possível registrar a avaliação";
			}
}else{
		echo "NÃO FOI POSSIVEL AVALIAR";
	}

exit();
	

?>