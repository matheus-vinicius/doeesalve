<?php 
	//conexao 
	include("Conexao.php");
	
	// recuperando valor 
	$id_usuario = $_POST['id_usuario'];
	$tel    	= $_POST['tel'];
	$telcom 	= $_POST['telcom'];
	$cel    	= $_POST['cel'];
	
	//query 
	$sql = "UPDATE cadastro02 SET
			tel 		= '$tel',
			telcom 		= '$telcom',
			cel 		= '$cel'
					WHERE  
			id_usuario 	= ".$id_usuario." ";

	//executando a query 
	$query = mysqli_query($con,$sql);

	//verificar se a query foi executada
	if($query)
	{
			echo "<script>
				alert('Contato(s) atualizado(s) com sucesso!');
				window.location.replace
				('VerCad2.php');
		  		</script>"; 

	}
	else 
	{
		echo $sql;
		// echo mysqli_error($con); 
	} 


 ?>

