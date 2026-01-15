<!DOCTYPE html> 
<html lang="pt-br">
<head>	

	<!-- Inicio Bootstrap  -->

		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<link rel="stylesheet" href="public/libs/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="public/css/Style.css">
		<link rel="stylesheet" href="public/libs/font-awesome/css/all.css">
		<link rel="stylesheet" href="public/css/fundoLogin.css">
		                                                                                                                                                                                                                       
		
	<!-- Fim Bootstrap  -->

	<!-- Inicio JavaScript -->

		<script src="public/libs/bootstrap/jquery/jquery-3.4.1.min.js"></script>
		<script src="public/libs/bootstrap/popper/popper.min.js"></script>
		<script src="public/libs/bootstrap/js/bootstrap.min.js"></script>
		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="public/js/jquery.mask.min"></script>

		<script type="text/javascript">

		$(document).ready(function(){

			$("#rg").mask("999.999.999-W", {
				translation: {
					'W': {
						pattern: /[X0-9]/
					}
				},
				reverse: true
			})

		})

		</script>

	<!-- Fim JavaScript -->

	<!-- Inicio Favicon  -->
	
	<link rel="shortcut icon" href="public/Imagens/Favicon.png" />
	
    <!-- Fim Favicon -->
	
    <title>Doe e Salve - Recuperar Senha</title>
</head>
<body>

	<center>
	
		<div class="card card-login mx-auto text-center bg-dark">
        	<div class="card-header mx-auto bg-dark">
           		<span> <img src="public/Imagens/logo.png" class="w-75"> </span>
			</div>
			
        <div class="card-body">
            <form method="POST" action="DoRecSenha.php">
                <div class="form-group has-feedback">
                  <label>E-mail</label>
                  <input type="email" class="form-control" name="email" placeholder="seuemail@seuemail.com" required>
                  <i class="glyphicon glyphicon-user form-control-feedback"></i>
                </div>
                <div class="form-group has-feedback">
                  <label>Celular</label>
                  <input type="text" class="form-control" name="cel" placeholder="Celular com DDD (somente números)" required>
                  <i class="glyphicon glyphicon-lock form-control-feedback"></i>
                  <br>
                <button type="submit" class="btn btn-danger btn-block">Enviar</button>
              </form>
            <p>Não possui registro? <a href="Cadastro01.php">Registre-se</a></p>

            </form>
        </div>
    </div>
		</center>
<script>
        function funcao1()
        {
        alert("Função temporariamente indisponível");
        }
        </script>
        <!-- <script src="public/js/teste/script.js"></script> -->
    </body>
    </html>


<!-- Mudar a cor da parte de baixo do botão para branco -->
<!-- https://www.codeproject.com/jscript/Form_field_input_mask.aspx -->

<!-- https://codepen.io/Brazza99/ -->