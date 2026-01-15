<?php

require("Conexao.php");

$nome	=  $_POST['nome'];
$senha	=  $_POST['senha'];

$sql = mysqli_query($con,"SELECT * FROM login_adm WHERE nome = '".$nome."' AND senha = '".$senha."';");



if(mysqli_num_rows($sql)>=1)
{
	foreach($sql as $sql2);
	//Iniciando a sessao
	session_start();

	//Iniciando a variavel
	$_SESSION['nome'] = $sql2['usuario'];
	$_SESSION['id_loginuser'] = $sql2['id_loginuser'];
	
	header("Location: ControleADM1.php");
}
else
{
	echo "<script>
				alert('ADM Inexistente');
				history.back()
			</script>";
}
	
?>