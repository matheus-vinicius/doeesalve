<?php

require("Conexao.php");

$email=  $_POST['email'];
$senha=  $_POST['senha'];

$sql = mysqli_query($con,"SELECT * FROM cadastro02 WHERE email = '".$email."' AND senha = '".$senha."';");



if(mysqli_num_rows($sql)>=1)
{
	foreach($sql as $sql2);
	//Iniciando a sessao
	session_start();

	//Iniciando a variavel
	$_SESSION['email'] = $sql2['usuario'];
	// $_SESSION['senha'] = $senha;
	$_SESSION['id_usuario'] = $sql2['id_usuario'];
	
	header("Location: Index.php");
}
else
{
	echo "<script>
				alert('Usuário Inexistente');
				history.back()
			</script>";
}
	
?>