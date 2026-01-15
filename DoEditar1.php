<?php 
	//conexao 
	include("Conexao.php");
	
	// recuperando valor 
	$id_usuario = $_POST['id_usuario'];
	$cep    	= $_POST['cep'];
	$logradouro = $_POST['logradouro'];
	$num    	= $_POST['num'];
	$compl    	= $_POST['compl'];
	$bairro    	= $_POST['bairro'];
	$cidade    	= $_POST['cidade'];
	$uf    		= $_POST['uf'];
	
	//query 
	$sql = "UPDATE cadastro01 SET
			cep 		= '$cep',
			logradouro 	= '$logradouro',
			num 		= '$num',
			compl 		= '$compl',
			bairro 		= '$bairro',
			cidade 		= '$cidade',
			uf 			= '$uf'
					WHERE  
			id_usuario 	= ".$id_usuario." ";

	//executando a query 
	$query = mysqli_query($con,$sql);

	//verificar se a query foi executada
	if($query)
	{
			echo "<script>
				alert('Endereço atualizado com sucesso!');
				window.location.replace
				('VerCad.php');
		  		</script>"; 

	}
	else 
	{
		echo $sql;
		// echo mysqli_error($con); 
	} 


 ?>

