<?php 
	//conexao 
	include("Conexao.php");
	
	// recuperando valor 
	$id_loginuser = $_POST['id_loginuser'];
	$usuario    	= $_POST['usuario'];
	$nome    	= $_POST['nome'];
	$senha 		= $_POST['senha'];
	
	//query 
	$sql = "UPDATE login_adm SET
			senha 		= '$senha'
					WHERE  
			id_loginuser 	= ".$id_loginuser." ";

	//executando a query 
	$query = mysqli_query($con,$sql);

	//verificar se a query foi executada
	if($query)
	{
			echo "<script>
				alert('Email e/ou senha atualizado(s) com sucesso!');
				window.location.replace
				('SenhaADM.php');
		  		</script>"; 

	}
	else 
	{
		echo $sql;
		// echo mysqli_error($con); 
	} 


 ?>

