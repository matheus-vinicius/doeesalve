 <?php 
 include("Conexao.php");
 session_start();

$email = $_POST['email'];

      $dqp2 = "SELECT * FROM `cadastro02` WHERE '$rgem1'= `rgem1`";
        $tre2 = mysqli_query($con,$dqp2);
    $row2 = mysqli_fetch_assoc($tre2);
    $senha = $row2["senha"];
 
  
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s'); 

require_once("public/libs/phpmailer/class.phpmailer.php");

include "EmailSenha.php";  
$para = $email; 
$de = 'tcc3y.IFI2019@gmail.com';
$de_nome = 'Equipe Doe & Salve.';
$assunto = "Recuperação de Senha"; 


function smtpmailer($para, $de, $de_nome, $assunto, $corpo) { 
  global $error;
  $mail = new PHPMailer();
  $mail->IsSMTP();    // Ativar SMTP
  $mail->SMTPDebug = 0;   // Debugar: 1 = erros e mensagens, 2 = mensagens apenas
  $mail->SMTPAuth = true;   // Autenticação ativada
  $mail->SMTPSecure = 'tls';  // Padrão de segurança
  $mail->Host = 'smtp.gmail.com'; // SMTP utilizado
  $mail->Port =587;      // A porta 587 deverá estar aberta em seu servidor
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
$Vai    = "E-mail: $email\n\nsua senha é: $senha";
 if (smtpmailer($email, 'tcc3y.IFI2019@gmail.com', 'Equipe Doe & Salve', 'Resposta do Contato', $Vai)) {

  echo ('Sucesso enviado, '); // Redireciona para uma página de obrigado.

}
if (!empty($error)) echo $error;
?>