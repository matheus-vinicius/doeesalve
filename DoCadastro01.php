<?php

	include("Conexao.php");
	
	//Recebendo os valores do form
	
	$nome 		= $_POST['nome'];
	$rg			= preg_replace("/[^a-zA-Z0-9]+/", "",  $_POST['rg']);
	$cpf      	= preg_replace("/[^0-9]+/", "",  $_POST['cpf']);  
	$cns		= preg_replace("/[^0-9]+/", "",  $_POST['cns']); 
	$abo		= $_POST['abo'];
	$sexo		= $_POST['sexo'];
	$pais		= $_POST['pais'];
	$datanasc	= $_POST['datanasc']; 
	$cep		= preg_replace("/[^0-9]+/", "",  $_POST['cep']);
	$logradouro	= $_POST['logradouro'];
	$num		= $_POST['num'];
	$compl    	= $_POST['compl'];
	$bairro		= $_POST['bairro'];
	$cidade     = $_POST['cidade'];
	$uf     	= $_POST['uf'];

	// $alt  		= 1.78;

// var_dump($rg);
// exit();

	if ($nome != ''){
		$sql = "INSERT INTO cadastro01 (nome, rg, cpf, cns, abo, sexo, pais, datanasc, cep, logradouro, num, compl, bairro, cidade, uf)
		VALUES ('$nome', '$rg', '$cpf', '$cns', '$abo', '$sexo', '$pais', '$datanasc', '$cep', '$logradouro', '$num', '$compl', '$bairro', '$cidade', '$uf');";

		// echo $sql;
		// exit();

		$result = mysqli_query($con,$sql);

		if($result){
			$sql2 = "select id_usuario from Cadastro01 where cpf = $cpf";
			$result2 = mysqli_query($con,$sql2);

			$data = mysqli_fetch_assoc($result2);

			session_start();

			$_SESSION['id_usuario'] = $data['id_usuario'];
		}

		// CODIGO PARA MOSTRAR O ERRO DURANTE A GRAVACAO NO BANCO DE DADOS
		
		var_dump(mysqli_error($con));

			if($result){
				header('Location: Cadastro02.php');
			}else{
				echo "Não foi possível efetuar o cadastro";
			}
}else{
		echo "NÃO FOI POSSIVEL CADASTRAR";
	}

exit();
	

?>

<!-- https://blog.dankicode.com/como-criar-um-sistema-de-cadastro-com-php-e-mysql -->