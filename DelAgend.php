<?php
	//Iniciancdo a sessao !!!! Seguranca
	session_start();

// 1) Incluindo conexao
include("Conexao.php");

// 2) Recuperando id para da pessoa para 
//deletar
$id_usuario = $_POST['id_usuario'];

// 3) Montando a query de delete
$sql = "DELETE FROM agendar 
	    WHERE id_usuario = $id_usuario";
// 4) Executando a query
$query = mysqli_query($con,$sql);	

// 5) Verifica se a query funcionou
if ($query) 
{
	echo" <script>
			alert('Agendamento cancelado com sucesso!');
			window.location.replace
			('Agendar.php');
		  </script>
		"; 
}
else
{	//Se der erro mostra a query
	echo $sql;
}





?>