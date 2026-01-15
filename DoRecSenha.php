<?php

	include("Conexao.php");
	
	$email	= $_POST['email'];
	$cel	= $_POST['cel'];
	$data_envio = date('d/m/Y');
	$hora_envio = date('H:i:s'); 
	$dqp2="SELECT * FROM cadastro02 WHERE $cel = cel";
	$tre = mysqli_query($con,$dqp2);
	$row = mysqli_fetch_assoc($tre);
	$senha = $row['senha'];

	require_once("public/libs/phpmailer/class.phpmailer.php");

	include "EmailSenha.php";  
	$para = $email; 
	$de = 'tcc3y.IFI2019@gmail.com';
	$de_nome = 'Equipe Doe & Salve';
	$assunto = "Recuperação de senha"; 
	$corpo = $senha; 
	
	function smtpmailer($para, $de, $de_nome, $assunto, $corpo) { 
  global $error;
  $mail = new PHPMailer();
  $mail->IsSMTP();    // Ativar SMTP
  $mail->SMTPDebug = 0;   // Debugar: 1 = erros e mensagens, 2 = mensagens apenas
  $mail->SMTPAuth = true;   // Autenticação ativada
  $mail->SMTPSecure = 'tls';  // Padrão de segurança
  $mail->Host = 'smtp.gmail.com'; // SMTP utilizado
  $mail->Port = 587;      // A porta 587 deverá estar aberta em seu servidor
  $mail->Username = USER;
  $mail->Password = PWD;
  $mail->SetFrom($de, $de_nome);
  $mail->Subject = $assunto;
  $mail->Body = $corpo;
  $mail->AddAddress($para);
  if(!$mail->Send()) {
    $error = 'Mail error: '.$mail->ErrorInfo; 
    return false;
  } else {
    $error = 'Mensagem enviada!';
    return true;
  }
}

// Insira abaixo o email que irá receber a mensagem, o email que irá enviar (o mesmo da variável GUSER), 
//o nome do email que envia a mensagem, o Assunto da mensagem e por último a variável com o corpo do email.
$Vai    = " O seu email para acessar o site DoeeSalve é: $email\n\nA sua senha para acessar o site DoeeSalve é:  $corpo";

 if (smtpmailer($email, 'tcc3y.IFI2019@gmail.com', 'Doe&Salve', 'Resposta do Contato', $Vai)) {

  echo "<script>
				alert('OBA! Email para recuperação de senha enviado com sucesso!');
				window.location.replace
				('Login.php');
		  		</script>"; // Redireciona para uma página de obrigado.

}
if (!empty($error)) echo $error;
?>

	<!--$result = mysqli_query($con,$sql);
	
	if ($result)
	{ 
		//drop senha
		echo $sql;
	}
	else{
		
		header ("Location: Index.php");

	}

	exit();*/
?> -->

		<!-- Como não usamos inner join é provavel que no campo utilize o numero do contato de emergencia -->

		<!-- https://www.youtube.com/user/webdesignfacil/search?query=recuperar+senha -->

		<!-- Permitir aplicativo menos seguros -->