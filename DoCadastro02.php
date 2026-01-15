<?php

	include("Conexao.php");
	include("Function.php");
	
	session_start();

	//Recebendo os valores do form
	
	$tel 			= preg_replace("/[^0-9]+/", "",  $_POST['tel']);
	$telcom			= preg_replace("/[^0-9]+/", "",  $_POST['telcom']);
	$cel      		= preg_replace("/[^0-9]+/", "",  $_POST['cel']);  
	$nomeem1		= $_POST['nomeem1']; 
	$rgem1			= preg_replace("/[^a-zA-Z0-9]+/", "",  $_POST['rgem1']);
	$celem1			= preg_replace("/[^0-9]+/", "",  $_POST['celem1']);
	$emailem1		= $_POST['emailem1'];
	$nomeem2		= $_POST['nomeem2']; 
	$rgem2			= preg_replace("/[^a-zA-Z0-9]+/", "",  $_POST['rgem2']);
	$celem2			= preg_replace("/[^0-9]+/", "",  $_POST['celem2']);
	$emailem2		= $_POST['emailem2'];
	$usuario		= $_POST['usuario'];
	$email    		= $_POST['email'];
	$confemail    	= $_POST['confemail'];
	$senha     		= $_POST['senha'];
	$confsenha  	= $_POST['confsenha'];
	$id_usuario		= $_SESSION['id_usuario'];

	// $alt  		= 1.78;

// var_dump($_POST);

	if (valemail($email,$confemail) && valsenha($senha,$confsenha)){
		$sql = "INSERT INTO cadastro02 (tel, telcom, cel, nomeem1, rgem1, celem1, emailem1, nomeem2, rgem2, celem2, emailem2, usuario, email, senha, id_usuario)
		VALUES ('$tel', '$telcom', '$cel', '$nomeem1', '$rgem1', '$celem1', '$emailem1', '$nomeem2', '$rgem2', '$celem2', '$emailem2', '$usuario','$email', '$senha', 
				'$id_usuario');";

		// echo $sql;
		// exit();

		$result = mysqli_query($con,$sql);

		// CODIGO PARA MOSTRAR O ERRO DURANTE A GRAVACAO NO BANCO DE DADOS

		// Atenção ao que está embaixo
		 
		var_dump(mysqli_error($con));

			if($result){
				echo "<script>
				alert('Cadastro efetuado com sucesso!');
				window.location.replace
				('Login.php');
		  		</script>";
			}else{
				echo "Não foi possível efetuar o cadastro";
			}
}else{
		echo "NÃO FOI POSSIVEL CADASTRAR";
	}

exit();
	
// 	if ($result)
// 	{
// 		valsenha($senha,$confsenha);
// 		valsenha($senha,$confsenha);

// 		header('Location:Index.html');
// 	}	
// 	else 
// 	{ 
// 		header('Location:Cadastro.php');
// 	}

// 		$result = mysqli_query($con,$sql);

// 			if($result){
// 				echo  "<script>
// 						alert('Cadastrado com Sucesso');
// 					</script>";
// 				header('Location:index.html');
// 			}else{
// 				echo "Não foi possível cadastrar";
// 			}
?>

<!-- https://blog.dankicode.com/como-criar-um-sistema-de-cadastro-com-php-e-mysql/ -->  