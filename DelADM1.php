<?php
	//Iniciancdo a sessao !!!! Seguranca
	session_start();

// 1) Incluindo conexao
include("Conexao.php");

// 2) Recuperando id para da pessoa para 
//deletar
$id_usuario = $_POST['id_usuario'];

// 3) Montando a query de delete
$sql = "DELETE FROM cadastro02 
	    WHERE id_usuario = $id_usuario";
// 4) Executando a query
$query = mysqli_query($con,$sql);	

// 5) Verifica se a query funcionou
if ($query) 
{
	echo" <script>
			alert('Usuário excluído com sucesso!');
			window.location.replace
			('ControleADM1.php');
		  </script>
		"; 
}
else
{	//Se der erro mostra a query
	echo $sql;
}





?>