<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Doe e Salve - Cadastro</title>
	
	<!-- Inicio Favicon  -->
	
		<link rel="shortcut icon" href="public/Imagens/Favicon.png" />
	
	<!-- Fim Favicon -->

	<!--Bootstrap e css-->
    
    	<link rel="stylesheet" href="public/libs/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="public/css/Style.css">
		<link rel="stylesheet" href="public/css/PlanoDeFundo.css">
   		<link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
		
	<!-- Fim Bootstrap -->
	
	<!-- Inicio Script -->

		<script src="public/libs/bootstrap/js/bootstrap.min.js"></script>
		<script src="public/js/Script.js"></script>
		<script src="public/libs/jquery-3.3.1.min"></script>
		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="public/js/jquery.mask.min"></script>

		<script Type="text/javascript">

            $(document).ready(function(){

			$("#tel").mask("(00) 0000-0000")

			$("#telcom").mask("(00) 0000-0000")
						
			$("#celular").mask("(00) 00000-0009")
			
			$("#celular").blur(function(event){
				if ($(this).val().length == 15){
					$("#celular").mask("(00) 00000-0009")
				}else{
					$("#celular").mask("(00) 00000-0009")
				}
			})

			$("#rgem1").mask("99.999.999-W", {
                translation: {
                    'W': {
                        pattern: /[X0-9]/
                    }
                },
                reverse: true
            })

			$("celem1").mask("(00)00000-0009")

			$("#celem1").blur(function(event){
				if ($(this).val().length == 15){
					$("#celem1").mask("(00) 00000-0009")
				}else{
					$("#celem1").mask("(00) 00000-0009")
				}
			})

			$("#rgem2").mask("99.999.999-W", {
                translation: {
                    'W': {
                        pattern: /[X0-9]/
                    }
                },
                reverse: true
            })

			$("celem2").mask("(00)00000-0009")

			$("#celem2").blur(function(event){
				if ($(this).val().length == 15){
					$("#celem2").mask("(00) 00000-0009")
				}else{
					$("#celem2").mask("(00) 00000-0009")
				}
			})

		})

        </script>

	<!-- Fim Script -->
    
		<!-- Cadastro de Contato -->

</head>

<body>
	<div class="container" id="cointanerrg">
  		<form method="post" action="DoCadastro02.php">
			<center>
				<br>
				<br>

				<h1>Informações para contato:</h1>
	<div class="row">
		 <div class="col-md-4">
             <label>
				<input type="text" class="form-control" name="tel" id="tel" placeholder="Telefone" minlength="10" maxlength="10">
			</label>
         </div>

          <div class="col-md-4">
             <label>
				<input type="text" class="form-control" name="telcom" id="telcom" placeholder="Telefone Comercial" minlength="10" maxlength="10" >
			</label>
         </div>
						
         <div class="col-md-4">
             <label>
				 <input type="text" class="form-control" name="cel" id="celular" placeholder="Celular*" required minlength="11" maxlength="11" required>
			 </label>
         </div>
     </div>
     <br><br>
				<h1>Contatos de emergência:</h1>
     <div class="row">
         <div class="col-md-3">
             	<label>
					 <input type="text" class="form-control" name="nomeem1" placeholder="Nome*" required minlength="10" data-toggle="tooltip" title="Nome de um contato de emergência">
				 </label>
         </div>

         <div class="col-md-3">
             <label>
				 <input type="text" class="form-control" name="rgem1" id="rgem1" placeholder="RG*" required minlength="9" maxlength="9" data-toggle="tooltip" title="RG de um contato de emergência">
			 </label>
         </div>

         <div class="col-md-3">
             <label>
				 <input type="text" class="form-control" name="celem1" id="celem1" placeholder="Celular*" required minlength="9" maxlength="9" data-toggle="tooltip" title="Celular de um contato de emergência">
			 </label>
         </div>

         <div class="col-md-3">
             <label>
				 <input type="email" class="form-control" name="emailem1" placeholder="Email*" required data-toggle="tooltip" title="Email de um contato de emergência">
			 </label>
         </div>

         <div class="col-md-3">
             <label>
				 <input type="text" class="form-control" name="nomeem2" placeholder="Nome" minlength="10">
			 </label>
         </div>

         <div class="col-md-3">
             <label>
				 <input type="text" class="form-control" name="rgem2" id="rgem2" placeholder="RG" minlength="9" maxlength="11">
			 </label>
         </div>

         <div class="col-md-3">
             <label>
				 <input type="text" class="form-control" name="celem2" id="celem2" placeholder="Celular" minlength="11" maxlength="11">
			 </label>
         </div>

         <div class="col-md-3">
             <label>
				 <input type="email" class="form-control" name="emailem2" placeholder="Email">
			 </label>
		 </div>
		</div>
		 
		 <div class="container" id="cointanerrg">
  		<form method="post" action="DoCadastro01.php">
			<center>
					<br><br>
				<h1>Cadastro</h1>
				<div class="col-md-3 ">						
                        <label>
							<input type="text" class="form-control" name="usuario" placeholder="Primeiro Nome*" required>
						</label>
                    </div>

				<div class="col-md-3 ">						
                        <label>
							<input type="email" class="form-control" name="email" placeholder="Email*" onpaste="return false" ondrop="return false" required>
						</label>
                    </div>

                    <div class="col-md-3">                        
                        <label>
                            <input type="email" class="form-control" name="confemail" placeholder="Confirme seu Email*" required onpaste="return false" ondrop="return false">
                        </label>
                    </div>
						
                    <div class="col-md-3">
                        <label>
							<input type="password" class="form-control" name="senha" placeholder="Senha*" required minlength="8" onpaste="return false" ondrop="return false">
						</label>
                    </div>    
					
					<div class="col-md-3">
						<label>
							<input type="password" class="form-control" name="confsenha" placeholder="Confirme sua Senha*" required minlength="8" onpaste="return false" ondrop="return false">
						</label>
					</div>


					<div class="col-md-18	" id="containerrg">
						
				<p><FONT COLOR="#FFFFF">° Senha de, no mínimo, 8 caracteres.</font></p>
				<p><FONT COLOR="#FFFFF">° Os campos com asterisco(*) são obrigatórios.</font></p>
                <p>
                <p><FONT COLOR="#FFFFF">° Todas as informações inseridas no cadastro, são de responsabilidade do usuário.</font>
                <FONT COLOR="#FFFFF">A descoberta de qualquer informação que não seja condizente com a qual deveria ser descrita, acarretará em exlusão da conta, bem como, acusação de falsidade ideológica, segundo Art. 299 do Código Penal - Decreto Lei 2848/40.</font></p>
                <p>	
                    
				      <div class="form-group">
                          <input type="submit" name="submit" class="btn btn-lg btn-danger" value="Cadastrar">
               		  </div>

				</div>
                      
						</p>
					</div>

					<div class="mx-auto" style=width: "200px;">
				 </div>
    		 </p>
			</div>
				</div>
			</center>
		</form>

</body>
</html>

		<!--
        <script src="public/libs/bootstrap/js/bootstrap.min.js"></script>
        <script src="public/js/Script.js"></script>
		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		
	-->

		<!-- Colocar aquele balão de informações -->
		<!-- https://www.w3schools.com/howto/howto_css_tooltip.asp -->
		<!-- Caso não de pra colocar o balão, colocamos um icone de interrogação no canto inferior direito da tela onde aparece oq seria o campo nome, rg, etc. -->

		<!-- Colocar um minimo de digitos para a parte do email (gmail, outlook, hotmail, etc) -->