<?php 
	//conexao 
	include("Conexao.php");
	
	// recuperando valor 
	$id_usuario = $_POST['id_usuario'];
	$email    	= $_POST['email'];
	$senha 		= $_POST['senha'];
	
	//query 
	$sql = "UPDATE cadastro02 SET
			email 		= '$email',
			senha 		= '$senha'
					WHERE  
			id_usuario 	= ".$id_usuario." ";

	//executando a query 
	$query = mysqli_query($con,$sql);

	//verificar se a query foi executada
	if($query)
	{
			echo "<script>
				alert('Email e/ou senha atualizado(s) com sucesso!');
				window.location.replace
				('VerCad4.php');
		  		</script>"; 

	}
	else 
	{
		echo $sql;
		// echo mysqli_error($con); 
	} 


 ?>

