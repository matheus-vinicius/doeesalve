<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Doe e Salve - Cadastro</title>
	
	<!-- Inicio Favicon  -->
	
		<link rel="shortcut icon" href="public/Imagens/Favicon.png" />
	
	<!-- Fim Favicon -->

	<!--Bootstrap-->
    
    	<link rel="stylesheet" href="public/libs/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="public/css/Style.css">
		<link rel="stylesheet" href="public/css/PlanoDeFundo.css">
   		<link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
		<link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
		
    <!-- Fim Bootstrap -->
    
    </head>

<body>
    
    <br><br>        
        <center>
        <div class="container" id="cointanerrg">
   <h1>Informações Pessoais</h1>
   <form method="post" action="DoCadastro01.php" name="formcadastro">
   
        <p>
           
                <div class="row">
                    <label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome Completo*" required minlength="10">
                    </label>
                        
                    <div class="col-md-2">
                        <label>
                            <input type="text" class="form-control" name="rg" id="rg" placeholder="RG*" minlength="9" maxlength="9" required>
                        </label>
                    </div>
                        
                    <label>
                        <input type="text" class="form-control cpfcnpj" name="cpf" id="cpf" placeholder="CPF*" minlength="11" maxlength="11" required >
                    </label>
                    
                    <div class="col-md-2">
                        <label>
                            <input type="text" class="form-control" name="cns" id="cns" placeholder="CNS*" required minlength="16" maxlength="16" data-toggle="tooltip" title="Carteira Nacional de Saúde">
                        </label>
                    </div>

                    <div class="col-md-2    ">
                            <label>
                                <input type="date" name="datanasc" class="form-control" placeholder="Data de Nascimento*" required data-toggle="tooltip" title="Data de nascimento" max="2003-11-29">
                            </label>
                    </div>
                    
                    <div class="col-md-2">
                        <h6>Tipo Sanguíneo*:</h6>
                            <select name='abo' required> 
                                <option>Selecione sua resposta</option>                                 
                                <option value="A+">A+</option> 
                                <option value="A-">A-</option> 
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="0+">O+</option> 
                                <option value="0-">O-</option>                         
                            </select> 
                    </div>                    
                    
                    <div class="col-md-2">
                        <h6>Sexo*:</h6>
                            <select name='sexo' required> 
                                <option>Selecione sua resposta</option>
                                <option value="M">Masculino</option> 
                                <option value="F">Feminino</option>
                             </select> 
            <br><br>
                    </div>
                                        
                     <div class="col-md-2">
                        <h6>País de Origem*:</h6>
                            <select name='pais' required OnSubmit="ValidarRespSelect();"> 
                                <option>Selecione sua resposta</option>
                                <option value ="Afeganistão">Afeganistão</option> 
                                <option value ="Africa">Africa do Sul</option> 
                                <option value ="Albania">Albania</option> 
                                <option value ="Alemanha">Alemanha</option>
                                <option value ="Andorra">Andorra</option>
                                <option value ="Angola">Angola</option>
                                <option value ="Antiga">Antiga e Barbuda</option>
                                <option value ="Arabia">Arabia Saudita</option>
                                <option value ="Argélia">Argélia</option>
                                <option value ="Argentina">Argentina</option> 
                                <option value ="Armênia">Armênia</option>  
                                <option value ="Austrália">Austrália</option>  
                                <option value ="Austria">Austria</option> 
                                <option value ="Azerbaijão">Azerbaijão</option> 
                                <option value ="Bahamas">Bahamas</option> 
                                <option value ="Bangladexe">Bangladexe</option> 
                                <option value ="Barbados">Barbados</option> 
                                <option value ="Barem">Barem</option> 
                                <option value ="Belgica">Belgica</option> 
                                <option value ="Belize">Belize</option> 
                                <option value ="Benim">Benim</option> 
                                <option value ="Bielorussia">Bielorussia</option> 
                                <option value ="Bolívia">Bolívia</option> 
                                <option value ="Bósnia">Bósnia e Herzegovina</option> 
                                <option value ="Botsuana">Botsuana</option> 
                                <option value ="Brasil">Brasil</option> 
                                <option value ="Brunei">Brunei</option>
                                <option value ="Bulgária">Bulgária</option>  
                                <option value ="Burquina">Burquina Faso</option> 
                                <option value ="Burúndi">Burúndi</option> 
                                <option value ="Butão">Butão</option> 
                                <option value ="Cabo">Cabo Verde</option> 
                                <option value ="Camarões">Camarões</option> 
                                <option value ="Camboja">Camboja</option> 
                                <option value ="Canadá">Canadá</option> 
                                <option value ="Catar">Catar</option> 
                                <option value ="Cazaquistão">Cazaquistão</option> 
                                <option value ="Chade">Chade</option> 
                                <option value ="Chile">Chile</option> 
                                <option value ="China">China</option> 
                                <option value ="Chipre">Chipre</option> 
                                <option value ="Cidade">Cidade do Vaticano</option>
                                <option value ="Colômbia">Colômbia</option>
                                <option value ="Congo">Congo</option>
                                <option value ="Coréia">Coréia do Sul</option>
                                <option value ="Costa">Costa do Marfim</option>
                                <option value ="Costa">Costa Rica</option>
                                <option value ="Croácia">Croácia</option>
                                <option value ="Dinamarca">Dinamarca</option>
                                <option value ="Djibuti">Djibuti</option>
                                <option value ="Dominica">Dominica</option>
                                <option value ="EUA">EUA</option>
                                <option value ="Egito">Egito</option>
                                <option value ="El">El Salvador</option>
                                <option value ="Emirados">Emirados Árabes</option>
                                <option value ="Equador">Equador</option>
                                <option value ="Eritréia">Eritréia</option>
                                <option value ="Escócia">Escócia</option>
                                <option value ="Eslováquia">Eslováquia</option>
                                <option value ="Eslovênia">Eslovênia</option>
                                <option value ="Espanha">Espanha</option>
                                <option value ="Estônia">Estônia</option>
                                <option value ="Etiópia">Etiópia</option>
                                <option value ="Fiji">Fiji</option>
                                <option value ="Filipinas">Filipinas</option>
                                <option value ="Finlândia">Finlândia</option>
                                <option value ="França">França</option>
                                <option value ="Gabão">Gabão</option>
                                <option value ="Gâmbia">Gâmbia</option>
                                <option value ="Gana">Gana</option>
                                <option value ="Geórgia">Geórgia</option>
                                <option value ="Gibraltar">Gibraltar</option>
                                <option value ="Granada">Granada</option>
                                <option value ="Grécia">Grécia</option>
                                <option value ="Guadalupe">Guadalupe</option>
                                <option value ="Guam">Guam</option>
                                <option value ="Guatemala">Guatemala</option>
                                <option value ="Guiana">Guiana</option>
                                <option value ="Guiana">Guiana Francesa</option>
                                <option value ="Guiné">Guiné-bissau</option>
                                <option value ="Haiti">Haiti</option>
                                <option value ="Holanda">Holanda</option>
                                <option value ="Honduras">Honduras</option>
                                <option value ="Hong">Hong Kong</option>
                                <option value ="Hungria">Hungria</option>
                                <option value ="Iêmen">Iêmen</option>
                                <option value ="Ilhas">Ilhas Cayman</option>
                                <option value ="Ilhas">Ilhas Cook</option>
                                <option value ="Ilhas">Ilhas Curaçao</option>
                                <option value ="Ilhas">Ilhas Marshall</option>
                                <option value ="Ilhas">Ilhas Turks & Caicos</option>
                                <option value ="Ilhas">Ilhas Virgens (brit.)</option>
                                <option value ="Ilhas">Ilhas Virgens(amer.)</option>
                                <option value ="Ilhas">Ilhas Wallis e Futuna</option>
                                <option value ="Índia">Índia</option>
                                <option value ="Indonésia">Indonésia</option>
                                <option value ="Inglaterra">Inglaterra</option>
                                <option value ="Irlanda">Irlanda</option>
                                <option value ="Islândia">Islândia</option>
                                <option value ="Israel">Israel</option>
                                <option value ="Itália">Itália</option>
                                <option value ="Jamaica">Jamaica</option>
                                <option value ="Japão">Japão</option>
                                <option value ="Jordânia">Jordânia</option>
                                <option value ="Kuwait">Kuwait</option>
                                <option value ="Latvia">Latvia</option>
                                <option value ="Líbano">Líbano</option>
                                <option value ="Liechtenstein">Liechtenstein</option>
                                <option value ="Lituânia">Lituânia</option>
                                <option value ="Luxemburgo">Luxemburgo</option>
                                <option value ="Macau">Macau</option>
                                <option value ="Macedônia">Macedônia</option>
                                <option value ="Madagascar">Madagascar</option>
                                <option value ="Malásia">Malásia</option>
                                <option value ="Malaui">Malaui</option>
                                <option value ="Mali">Mali</option>
                                <option value ="Malta">Malta</option>
                                <option value ="Marrocos">Marrocos</option>
                                <option value ="Martinica">Martinica</option>
                                <option value ="Mauritânia">Mauritânia</option>
                                <option value ="Mauritius">Mauritius</option>
                                <option value ="México">México</option>
                                <option value ="Moldova">Moldova</option>
                                <option value ="Mônaco">Mônaco</option>
                                <option value ="Montserrat">Montserrat</option>
                                <option value ="Nepal">Nepal</option>
                                <option value ="Nicarágua">Nicarágua</option>
                                <option value ="Niger">Niger</option>
                                <option value ="Nigéria">Nigéria</option>
                                <option value ="Noruega">Noruega</option>
                                <option value ="Nova">Nova Caledônia</option>
                                <option value ="Nova">Nova Zelândia</option>
                                <option value ="Omã">Omã</option>
                                <option value ="Palau">Palau</option>
                                <option value ="Panamá">Panamá</option>
                                <option value ="Papua">Papua-nova Guiné</option>
                                <option value ="Paquistão">Paquistão</option>
                                <option value ="Peru">Peru</option>
                                <option value ="Polinésia">Polinésia Francesa</option>
                                <option value ="Polônia">Polônia</option>
                                <option value ="Porto">Porto Rico</option>
                                <option value ="Portugal">Portugal</option>
                                <option value ="Qatar">Qatar</option>
                                <option value ="Quênia">Quênia</option>
                                <option value ="Rep">Rep. Dominicana</option>
                                <option value ="Rep">Rep. Tcheca</option>
                                <option value ="Reunion">Reunion</option>
                                <option value ="Romênia">Romênia</option>
                                <option value ="Ruanda">Ruanda</option>
                                <option value ="Rússia">Rússia</option>
                                <option value ="Saipan">Saipan</option>
                                <option value ="Samoa">Samoa Americana</option>
                                <option value ="Senegal">Senegal</option>
                                <option value ="Serra">Serra Leone</option>
                                <option value ="Seychelles">Seychelles</option>
                                <option value ="Singapura">Singapura</option>
                                <option value ="Síria">Síria</option>
                                <option value ="Sri">Sri Lanka</option>
                                <option value ="St">St. Kitts & Nevis</option>
                                <option value ="St">St. Lúcia</option>
                                <option value ="St">St. Vincent</option>
                                <option value ="Sudão">Sudão</option>
                                <option value ="Suécia">Suécia</option>
                                <option value ="Suiça">Suiça</option>
                                <option value ="Suriname">Suriname</option>
                                <option value ="Tailândia">Tailândia</option>
                                <option value ="Taiwan">Taiwan</option>
                                <option value ="Tanzânia">Tanzânia</option>
                                <option value ="Togo">Togo</option>
                                <option value ="Trindad">Trindad & Tobago</option>
                                <option value ="Tunísia">Tunísia</option>
                                <option value ="Turquia">Turquia</option>
                                <option value ="Ucrânia">Ucrânia</option>
                                <option value ="Uganda">Uganda</option>
                                <option value ="Uruguai">Uruguai</option>
                                <option value ="Vaticano">Vaticano</option>
                                <option value ="Venezuela">Venezuela</option>
                                <option value ="Vietnã">Vietnã</option>
                                <option value ="Zaire">Zaire</option>
                                <option value ="Zâmbia">Zâmbia</option>
                                <option value ="Zimbábue">Zimbábue</option>
                                 
                            </select> 
                    </div> 

                </div>
            </div>  
                    
            <div class="container" id="containerrg">
                    <form method="post" action="DoCadastro01.php">
                        <center>
                            <h1>Endereço</h1>
                                <p>

                            <div class="col-md-4">
                                    <label>
                                        <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP*" required minlength="8" maxlength="8" onkeyup="validarCEP(cep)">
                                    </label>
                                </div>
                                
                                <div class="col-md-4">
                                    <label>
                                        <input type="text" class="form-control" id="logradouro" name="logradouro" placeholder="Logradouro*">
                                    </label>
                                </div>
                                    
                                <div class="col-md-4">
                                    <label>
                                        <input type="text" class="form-control" id="num" name="num" placeholder="N°*" required minlength="2" maxlength="4" onKeyUp="somenteNumeros(this);">
                                    </label>
                                </div>
                                
                                <div class="col-md-4">
                                    <label>
                                        <input type="text" class="form-control" id="compl" name="compl" placeholder="Complemento">
                                    </label>
                                </div>

                                <div class="col-md-4">
                                    <label>
                                        <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro*">
                                    </label>
                                </div>

                                <div class="col-md-4">
                                    <label>
                                        <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade*">
                                    </label>
                                </div>

                                <div class="col-md-4">
                                    <label>
                                        <input type="text" class="form-control" id="uf" name="uf" placeholder="Estado*"> 
                                    </label>
                                </div>
                                <p><FONT COLOR="#FFFFF">° Os campos com asterisco(*) são obrigatórios.</font></p>
                <p>
                <p><FONT COLOR="#FFFFF">° Todas as informações inseridas no cadastro, são de responsabilidade do usuário.</font>
                <FONT COLOR="#FFFFF">A descoberta de qualquer informação que não seja condizente com a qual deveria ser descrita, acarretará em exclusão da conta, bem como, acusação de falsidade ideológica, segundo Art. 299 do Código Penal - Decreto Lei 2848/40.</font></p>
                <p>
                                <!-- Campo cidade, já que o matheuzinho pediu
                                <div class="col-md-4">
                                    <label>
                                        <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro" disabled>
                                    </label>
                                </div>
                                -->
                            
                    <div class="col-md-12" id="containerrg">

               
                
                        <p>

                      <div class="form-group">
                          <input type="submit" name="submit" class="btn btn-lg btn-danger" value="Próximo">
                      </div>
                      
                        </p>
                    </div>
                <h5><a href="Index.php">Voltar</a></h5>
             </p>
            </div>
    </center>
        </form>
    </div>
    </center>
<!-- Inicio Script -->

        <script src="public/libs/bootstrap/js/bootstrap.min.js"></script>
        <script src="public/libs/jquery-3.3.1.min"></script>
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="public/js/jquery.mask.min"></script>
        <script src="public/js/validarcpf.js"></script>
        <script src="public/js/script.js"></script>
        <script src="public/js/script2.js"></script>

    <!-- Fim Script -->
</body>
</html>

<!--

        <script src="public/js/Script.js"></script>
        <script src="public/js/ValidarCPF.js"></script>
        <script src="public/libs/bootstrap/js/bootstrap.min.js"></script>
        <script src="public/libs/jquery-3.3.1.min"></script>
        <script src="public/js/jquery.mask.min"></script>
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

        -->

		<!-- https://www.geradorcpf.com/javascript-validar-cpf.htm -->
		<!-- Link Validando o CNS e tem que ver o gif com tempo inicial -->
        <!-- http://fdatorre.blogspot.com/2017/03/validando-o-cns-cartao-nacional-do-sus.html -->

        <!-- Não funciona mas o cadastro2 funciona -->

        <!-- Dar um jeito nos campos select -->
        <!-- Colocar atributos min e max na parte de data -->
        <!-- Pensar em alguma coisa para não deixar 2 rg's cpf's ou algo do tipo no banco (ser cadastrado 2 vezes) -->

        <!-- Mostrar indice (quantas paginas de cadastro tem)

        campo cidade

        add required no campo cpf (tirado apenas para teste) -->

        <!-- ValidarDados.js com jQuery Validation e JavaScript -->