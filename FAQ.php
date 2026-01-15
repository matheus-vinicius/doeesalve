<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Doe e Salve - FAQ</title>
  <link rel="stylesheet" href="./style.css">

  <link rel="shortcut icon" href="public/Imagens/Favicon.png" />

  <link href='https://fonts.googleapis.com/css?family=Karla' rel='stylesheet' type='text/css'>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="public/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/Estilo.css">
    <link rel="stylesheet" href="public/css/carouselfaq.css">
    <link rel="stylesheet" href="public/css/Style.css">
    <link rel="stylesheet" href="public/libs/font-awesome/css/all.css">
    <link rel="stylesheet" href="public/css/teste.css">
    <script src="public/libs/bootstrap/jquery/jquery-3.3.1.min.js"></script>
    <script src="public/libs/bootstrap/popper/popper.min.js"></script>
    <script src="public/libs/bootstrap/js/bootstrap.min.js"></script>
  
  
</head>

<body>

    <header class="container-fluidx fixed-top">
            <div id="barra-topo" class="py-3">
                <div class="d-flex justify-content-center justify-content-md-between">
                    <div class="text-center">
                        <img src="public/imagens/logo.png" id="logo-topo" alt="Logo - Doe e Salve">
                    </div>
                    <div class="d-none d-md-block">
                        <span class="mr-3">Siga-nos</span>
                        <a target="_blank" href="http://facebook.com/Doe-Salve-258012758462964/?ref=bookmarks"><i class="fab fa-facebook-f mx-3"></i></a>
                        <a target="_blank" href="https://instagram.com/_doeesalve?igshid=islxuj7qmo36"><i class="fab fa-instagram mx-3"></i></a>
                        <a target="_blank" href="https://twitter.com/SalveDoe?s=08"><i class="fab fa-twitter mx-3"></i></a>
                    </div>
                </div>
            </div>
            <!-- <div class="row bg-danger"> -->
            <!-- <div class="d-flex bg-warning"> -->
              <?php if(empty($_SESSION['email'])){?>
                <div class="d-flex">
                    <div class="col-11">
                        <ul class="nav nav-fill ">
                            <li class="nav-item">
                                <a class="nav-link" type="button" href="Index.php" style="background-color: #fff">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" type="button" href="Locais.php" style="background-color: #fff">Locais</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" type="button" href="Sobre.php" style="background-color: #fff">Sobre</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" type="button" onclick="funcao1()" href="#" style="background-color: #fff">Avalie</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" type="button" onclick="funcao1()" href="#" style="background-color: #fff">Agendamento</a>
                            </li>
                            
                        </ul>
                    </div>

                   

                    <div class="col-1 d-flex justify-content-end">
                        <span class="pr-3 py-1">
                            <i class="fas fa-user fa-2x"></i>
                            Entrar
                            <i class="pointer dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="Login.php">Login</a>
                                <a class="dropdown-item" href="Cadastro01.php">Cadastre-se</a>
                            </div>
                        </span>
                    </div>
            <!-- </div> -->
        </header>
        <?php }
        else {?>

      <div class="d-flex">
                    <div class="col-11">
                        <ul class="nav nav-fill ">
                            <li class="nav-item">
                                <a class="nav-link" type="button" href="Index.php" style="background-color: #fff">Home</a>
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
                                <a class="nav-link" type="button" href="Agendar.php" style="background-color: #fff">Agendamento</a>
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
                            </div>
                        </span>
                    </div>
            <!-- </div> -->
        </header>
    <?php } ?>

        
    <br><br>

<center>

<h3>Benefícios de doar sangue</h3>

<div class="slider-container">

  <div class="slider-content">

    <div class="slider-single">
      <img class="slider-single-image" src="public/Imagens/7.jpg" alt="2" />
    </div>

    <div class="slider-single">
      <img class="slider-single-image" src="public/Imagens/23.jpg" alt="2" />
    </div>

    <div class="slider-single">
      <img class="slider-single-image" src="public/Imagens/16.jpg" alt="2" />
    </div>

    <div class="slider-single">
      <img class="slider-single-image" src="public/Imagens/24.jpg" alt="2" />
    </div>

    <div class="slider-single">
      <img class="slider-single-image" src="public/Imagens/9.png" alt="3" />
    </div>

    <div class="slider-single">
      <img class="slider-single-image" src="public/Imagens/25.jpg" alt="2" />
    </div>

    <div class="slider-single">
      <img class="slider-single-image" src="public/Imagens/20.png" alt="4" />
    </div>

    <div class="slider-single">
      <img class="slider-single-image" src="public/Imagens/26.jpg" alt="2" />
    </div>

    <div class="slider-single">
      <img class="slider-single-image" src="public/Imagens/21.jpg" alt="5" />
    </div>

    <div class="slider-single">
      <img class="slider-single-image" src="public/Imagens/27.jpg" alt="2" />
    </div>

    <div class="slider-single">
      <img class="slider-single-image" src="public/Imagens/posts/04.jpg" alt="6" />
    </div>

    <div class="slider-single">
      <img class="slider-single-image" src="public/Imagens/posts/02.jpg" alt="6" />
    </div>

</div>

<a class="slider-left" href="javascript:void(0);"><i class="fa fa-arrow-left"></i></a>

<a class="slider-right" href="javascript:void(0);"><i class="fa fa-arrow-right"></i></a>

</div>    

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="col-md-12" >
  <div class="item-box-blog">

    
      <div class="item-box-blog-heading">
          <h3>Documentos Necessários</h3>
      </div>

      <h6 style="margin-left:50px; text-align: justify;">O doador deve levar um dos seguintes documentos de identidade com foto:

        <br><br><br>

        <li>RG, Carteira de Trabalho ou CNH</li>

        <br>

      </h6>

    </div>

  </div>

</div>

<div class="col-md-12" >
  <div class="item-box-blog">

    
      <div class="item-box-blog-heading">
          <h3>Orientações</h3>
      </div>

      <h6 style="margin-left:50px; text-align: justify;">O doador deve:

        <br><br><br>
        
        <li>Ter entre 16 e 69 anos, sendo que a primeira doação deve ser até os 60 anos</li>

          <br>

        <li>Pesar 50 kg ou mais</li>

          <br>

        <li>Estar bem alimentado, porem as alimentações devem ser leves nas 3 horas que antecedem a doação</li>

          <br>

        <li>Ter tido uma boa noite de sono, com pelo menos 6 horas</li>

          <br>

        <li>Respeitar o tempo mínimo de uma doação para outra

            <br><br>

          <ul>- 2 meses para homens (máximo de 04 doações nos últimos 12 meses).

            <br><br>

          - 3 meses para mulher (máximo de 03 doações nos últimos 12 meses).</ul>

        </li>

          <br>

      </h6>

    </div>

  </div>

  <div class="col-md-12" >
    <div class="item-box-blog">

    
      <div class="item-box-blog-heading">
          <h3>O que te impede de doar</h3>
      </div>

      <h6 style="margin-left:50px; text-align: justify;">

          <br><br>

        <li>Uso de alcool nas 12 horas anteriores</li>

        <br>

        <li>Gravidez (Só durante o periodo).</li>

        <br>

        <li>Resfriado: aguardar 7 dias após desaparecimento dos sintomas.</li>

        <br>

        <li>Diabetes com uso de insulina e Epilepsia</li>

          <br>

        <li>Ter tido Hepatite após os 11 anos</li>

          <br>

        <li>Uso de drogas ilícitas injetáveis.</li>

          <br>

        <li>Malária.</li>

        <br><br>

        <div class="item-box-blog-heading">
          <h3>Critérios a serem respondidos na pré-triagem</h3>
      </div>
           <br><br>

        <li>Tratamento médico e dentário</li>

        <br>

        <li>Uso de alguns medicamentos</li>

        <br>

        </div>

    </div>

  </div>

  <div class="col-md-12">
    <div class="item-box-blog">
    
      <div class="item-box-blog-heading">
          <h3>Exames feitos</h3>
      </div>

      <h6 style="margin-left:50px; text-align: justify;">Os exames feitos após a coleta de sangue são:

        <br><br><br>
        
        <li>ABO/Rh</li>

          <br>

        <li>Pesquisas de hemoglobina anormal</li>

          <br>

        <li>Pesquisas de anticorpos anti-eritrocitários irregulares</li>

          <br>

        <li>Hepatites B e C</li>

          <br>

        <li>Doenças de Chagas</li>

          <br>

        <li>Sifilis</li>

          <br>

        <li>HTLV I/II</li>

          <br>

        <li>NAT (ampliação do ácido nucleico) para HIV e Hepatite C.</li>

          <br>

      </h6>

    </div>

  </div>

      <div class="col-md-12" >
          <div class="item-box-blog">

    
      <div class="item-box-blog-heading">
          <h3>Recomendações após a doação</h3>
      </div>

      <h6 style="margin-left:50px; text-align: justify;">O doador deve/não deve:

        <br><br><br>
        
        <li>Esperar 15 minutos no hemocentro</li>

          <br>

        <li>Não realizar atividades físicas</li>

          <br>

        <li>Ingerir bastante líquido
        
          - Bebidas alcoólicas após 6 horas da doação
        
        </li>

          <br>

        <li>Não fumar por 1 hora</li>

          <br>

        <li>Não dirigir por 1 hora</li>

          <br>

        <li>Manter o curativo no local da punção por 4 horas</li>

          <br>

      </h6>

    </div>

  </div>

  <center>
    <div id="containercolor">
            <div class="d-none d-md-block">
                <span class="mr-3"><h4>Siga-nos</h4></span>
                <br><br>
                    <a href="http://facebook.com/Doe-Salve-258012758462964/?ref=bookmarks" style="color: #fff" target="_blank"><i class="fab fa-facebook-f mx-3"></i></a>
                    <a href="https://instagram.com/_doeesalve?igshid=islxuj7qmo36" style="color: #fff" target="_blank"><i class="fab fa-instagram mx-3"></i></a>
                    <a href="https://twitter.com/SalveDoe?s=08" style="color: #fff" target="_blank"><i class="fab fa-twitter mx-3"></i></a>
            </div>

            <br><br>

    </div>
    </center>
      
    
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script>
    function funcao1()
    {
    alert("É necessário fazer login para acessar essa página");
    }
    </script>

    <script src="public/js/carouselfaq.js"></script>

</body>
</html>