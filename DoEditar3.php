<?php 
	//conexao 
	include("Conexao.php");
	
	// recuperando valor 
	$id_usuario = $_POST['id_usuario'];
	$nomeem1    = $_POST['nomeem1'];
	$rgem1    	= $_POST['rgem1'];
	$celem1    	= $_POST['celem1'];
	$emailem1   = $_POST['emailem1'];
	$nomeem2    = $_POST['nomeem2'];
	$rgem2    	= $_POST['rgem2'];
	$celem2    	= $_POST['celem2'];
	$emailem2   = $_POST['emailem2'];	
	//query 
	$sql = "UPDATE cadastro02 SET
			nomeem1 	= '$nomeem1',
			rgem1 		= '$rgem1',
			celem1 		= '$celem1',
			emailem1 	= '$emailem1',
			nomeem2		= '$nomeem2',
			rgem2 		= '$rgem2',
			celem2 		= '$celem2',
			emailem2 	= '$emailem2'
					WHERE  
			id_usuario 	= ".$id_usuario." ";

	//executando a query 
	$query = mysqli_query($con,$sql);

	//verificar se a query foi executada
	if($query)
	{
			echo "<script>
				alert('Contato(s) de emergência atualizado(s) com sucesso!');
				window.location.replace
				('VerCad3.php');
		  		</script>"; 

	}
	else 
	{
		echo $sql;
		// echo mysqli_error($con); 
	} 


 ?>

