<?php
session_start();
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="public/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/Estilo.css">
    <!-- Se colocar o Style.css o link de "veja" fica preto porem o das redes sociais tbm ficam -->
    <link rel="stylesheet" href="public/css/Style.css">
    <link rel="stylesheet" href="public/libs/font-awesome/css/all.css">
    <link rel="stylesheet" href="public/css/teste.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

    <title>Doe e Salve - Agendamento</title>

    <!-- Inicio Favicon  -->
    
        <link rel="shortcut icon" href="public/Imagens/Favicon.png">
    
    <!-- Fim Favicon -->
    
</head>
<body>
    <!-- <div class="container-fluid"> -->
    <header  class="container-fluidx">
            <div id="barra-topo" class="py-3">
                <div class="d-flex justify-content-center justify-content-md-between">
                    <div class="text-center">
                        <img src="public/imagens/logo.png" id="logo-topo" alt="Logo - Doe e Salve">
                    </div>
                    <div class="d-none d-md-block">
                        <span class="mr-3">Siga-nos</span>
                        <a target="_blank" href="http://facebook.com/Doe-Salve-258012758462964/?ref=bookmarks><i class="fab fa-facebook-f mx-3"></i></a>
                        <a target="_blank" href="https://instagram.com/_doeesalve?igshid=islxuj7qmo36"><i class="fab fa-instagram mx-3"></i></a>
                        <a target="_blank" href="https://twitter.com/SalveDoe?s=08"><i class="fab fa-twitter mx-3"></i></a>
                    </div>
                </div>
            </div>
            <!-- <div class="row bg-danger"> -->
                <div class="d-flex">
                    <div class="col-11">
                        <ul class="nav nav-fill ">
                            <li class="nav-item">
                                <a class="nav-link" type="button" href="Index.php"  style="background-color: #fff">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" type="button" href="Locais.php" style="background-color: #fff">Locais</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" type="button" href="Sobre.php" style="background-color: #fff">Sobre</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" type="button" href="Avaliacao.php" style="background-color: #fff">Avalie</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" type="button" href="#" style="background-color: #fff">Agendamento</a>
                            </li>
                            
                        </ul>
                    </div>

                    <div class="col-1 d-flex justify-content-end">
                        <span class="pr-3 py-1">
                            <p>Bem-Vindo(a), <?php echo $_SESSION['email'] ?></p>
                            <i class="pointer dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="VerAgend.php">Agendamentos</a>
                                <a class="dropdown-item" href="VerCad.php">Verificar Dados</a>
                                <a class="dropdown-item" href="Logout.php">Sair</a>
                            </div>
                        </span>
                    </div>  
                </div>
            <!-- </div> -->
        </header>
    <!-- </div> -->

    <br><br><br>

    <center>

    <h3>Agendamento de data e horário</h3>

    <br>

    <form action="DoAgendar.php" method="post">

        <div class="col-md-6">
                        <h6>Escolha o hemocentro mais próximo da sua casa:</h6>
                            <select name='hemocentro' required> 
                                <option>Selecione sua resposta</option> 
                                <option value="Centro Hospitalar de Santo André">Centro Hospitalar de Santo André</option> 
                                <option value="Hospital Estadual Mário Covas de Santo André">Hospital Estadual Mário Covas de Santo André</option>
                                <option value="Hemocentro São Lucas de São Bernardo do Campo">Hemocentro São Lucas de São Bernardo do Campo</option> 
                                <option value="Hospital Estadual de Diadema">Hospital Estadual de Diadema</option> 
                                <option value="Colsan Hemocentro Regional de São Bernardo do Campo">Colsan Hemocentro Regional de São Bernardo do Campo</option> 
                                <option value="Núcleo Regional d Hemoterapia Dr. Aguinaldo Quaresma de São Caetano do Sul">Núcleo Regional d Hemoterapia Dr. Aguinaldo Quaresma de São Caetano do Sul</option>               
                                <option value="Hosp. Municipal Dr. Carmino Caricchio, Tatuapé (São Paulo)">Hosp. Municipal Dr. Carmino Caricchio, Tatuapé (São Paulo)</option> <option value="Hosp. Municipal Alípio Correa Neto Ermelino Matarazzo, Vila Paranagua (São Paulo)">Hosp. Municipal Alípio Correa Neto Ermelino Matarazzo, Vila Paranagua (São Paulo)</option>               
                            </select> 
        </div>        

        <div class="col-md-6">
                        <h6>Escolha uma data:</h6>
                            <select name='data' required> 
                                <option>Selecione sua resposta</option> 
                                <option value="2019-11-29">29 de Novembro de 2019</option> 
                                <option value="2019-11-30">30 de Novembro de 2019</option> 
                                <option value="2019-12-02">02 de Dezembro de 2019</option> 
                                <option value="2019-12-03">03 de Dezembro de 2019</option> 
                                <option value="2019-12-04">04 de Dezembro de 2019</option> 
                                <option value="2019-12-05">05 de Dezembro de 2019</option> 
                                <option value="2019-12-06">06 de Dezembro de 2019</option>                        
                                <option value="2019-12-07">07 de Dezembro de 2019</option>                        
                                <option value="2019-12-09">09 de Dezembro de 2019</option>                        
                                <option value="2019-12-10">10 de Dezembro de 2019</option>                        
                                <option value="2019-12-11">11 de Dezembro de 2019</option>                        
                                <option value="2019-12-12">12 de Dezembro de 2019</option>                        
                                <option value="2019-12-13">13 de Dezembro de 2019</option>                        
                                <option value="2019-12-14">14 de Dezembro de 2019</option>                        
                                <option value="2019-12-16">16 de Dezembro de 2019</option>                        
                                <option value="2019-12-17">17 de Dezembro de 2019</option>                        
                                <option value="2019-12-18">18 de Dezembro de 2019</option>                        
                                <option value="2019-12-19">19 de Dezembro de 2019</option>                        
                                <option value="2019-12-20">20 de Dezembro de 2019</option>                        
                                <option value="2019-12-23">23 de Dezembro de 2019</option>                        
                                <option value="2019-12-26">26 de Dezembro de 2019</option>                        
                                <option value="2019-12-27">27 de Dezembro de 2019</option>                        
                                <option value="2019-12-28">28 de Dezembro de 2019</option>                        
                                <option value="2019-12-30">30 de Dezembro de 2019</option>                        
                            </select> 
        </div>             
        
        <div class="col-md-6">
                        <h6>Escolha o horário desejado:</h6>
                            <select name='hora' required> 
                                <option>Selecione sua resposta</option>                                 
                                <option value="0800">08h00</option> 
                                <option value="0815">08h15</option> 
                                <option value="0830">08h30</option>
                                <option value="0845">08h45</option>
                                <option value="0900">09h00</option> 
                                <option value="0915">09h15</option> 
                                <option value="0930">09h30</option>
                                <option value="0945">09h45</option>
                                <option value="1000">10h00</option> 
                                <option value="1015">10h15</option> 
                                <option value="1030">10h30</option>
                                <option value="1045">10h45</option>
                                <option value="1100">11h00</option> 
                                <option value="1115">11h15</option> 
                                <option value="1130">11h30</option>
                                <option value="1145">11h45</option>
                                <option value="1200">12h00</option> 
                                <option value="1215">12h15</option> 
                                <option value="1230">12h30</option>
                                <option value="1245">12h45</option>

                            </select> 
        </div> 
        <!--
             <br><br>
        <div>
            <label>
                 <input type="time" class="form-control" min="8:00" max="13:00" required>  
            </label>
        </div> -->

             <br>

        <div class="form-group">
             <input type="submit" name="submit" class="btn btn-danger" value="Agendar">
        </div>

    </form>

    <br><br>

    </center>

                
            </div>
        </div>
	</section>
    <!-- </div> -->

    <!-- Inicio Copyright -->
    <center>
    <div id="containercolor">
            <div class="d-none d-md-block">
                <span class="mr-3"><h4>Siga-nos</h4></span>
                <br><br>
                    <a href="http://facebook.com/Doe-Salve-258012758462964/?ref=bookmarks target="_blank"><i class="fab fa-facebook-f mx-3"></i></a>
                    <a href="https://instagram.com/_doeesalve?igshid=islxuj7qmo36" target="_blank"><i class="fab fa-instagram mx-3"></i></a>
                    <a href="https://twitter.com/SalveDoe?s=08" target="_blank"><i class="fab fa-twitter mx-3"></i></a>
            </div>

            <br><br>

    </center>

    <!--Fim Copyright -->

    
    <script src="public/libs/bootstrap/jquery/jquery-3.3.1.min.js"></script>
    <script src="public/libs/bootstrap/popper/popper.min.js"></script>
    <script src="public/libs/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>


<!-- https://getbootstrap.com/docs/4.3/components/carousel/ -->
<!-- Os icones de redes sociais estão desaparecendo ao inves de ficar com o contorno branco -->
<!-- https://www.html.am/reference/html-special-characters.cfm -->

<!-- https://forum.imasters.com.br/topic/315222-calend%C3%A1rio-de-eventos-com-php-e-mysql/ -->

<!-- https://www.youtube.com/watch?v=P1mqyAShMfo -->
<!-- http://k5n.us/wp/webcalendar/webcalendar-downloads/ -->

<!-- <i class="fas fa-calendar-alt"></i> 
<i class="fas fa-angle-double-left"></i>
<i class="fas fa-angle-double-right"></i>
<i class="far fa-alarm-clock"></i> -->

<!-- https://fontawesome.com/icons?d=gallery -->
<!-- https://jquery.com -->

<!-- <input type="date" min="2019-06-15" max="2019-12-31" required> -->

<!-- https://www.devmedia.com.br/novos-tipos-de-input-da-html-5/27109 -->
<!-- https://developer.mozilla.org/pt-BR/docs/Web/HTML/Element/Input/time -->
<!-- https://codepen.io/Brazza99/pen/agNZYE -->

<!-- Acho que vai tirar a parte do "avaliação e estoque" desse arquivo -->

<!-- Dps de agendar leva para a pré-triagem dependendo do dia -->