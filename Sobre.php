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
    <link rel="stylesheet" href="public/css/Style.css">
    <link rel="stylesheet" href="public/css/teste.css">
    <link rel="stylesheet" href="public/libs/font-awesome/css/all.css">  

    <title>Doe e Salve - Sobre Nós</title>

    <!-- Inicio Favicon  -->
	
		<link rel="shortcut icon" href="public/Imagens/Favicon.png" />
	
    <!-- Fim Favicon -->
    
</head>
<body>
    <!-- <div class="container-fluid"> -->
        <header  class="container-fluidx fixed-top">
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
                                <a class="nav-link" type="button" href="#" style="background-color: #fff">Sobre</a>
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
                                <a class="nav-link" type="button" href="#" style="background-color: #fff">Sobre</a>
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
                                <a class="dropdown-item" href="#">Agendamentos</a>
                                <a class="dropdown-item" href="VerCad.php">Verificar Dados</a>
                                <a class="dropdown-item" href="Logout.php">Sair</a>
                            </div>
                        </span>
                    </div>
            <!-- </div> -->
        </header>
    <?php } ?>
    <!-- </div> -->

    <!-- Texto explicando o por que da escolha desse tema e a importancia de doar sangue -->
    <!-- Mudar a fonte do texto -->

    <br><br><br><br><br><br>

    <!-- Cogitando tirar isso -->

    <center>
        
        <div id="sobre">
            <h5><strong>
                    O <font color="red">'Doe e Salve'</font> é um website direcionado para o encurtamento<br>
            do processo de doação de sangue. Onde um doador voluntário,<br>
            ao preencher a coleta de dados, é conectado à um receptor sanguíneo<br>
            (aquele que receberá a doação).
            </strong></h5>
        </div>

    <!-- Tirar -->

    <br><br>
    
        <h3>A importância da doação de sangue</h3>

    <br>

        <img src="public/Imagens/1.jpg" style="width:450px; height:px;">

    <br><br>

        <div id="imp" class="container">

            <h5 style="text-align:justify">a importância da doação de sangue é o simples fato de que ela promove um imenso benefício a sociedade, haja vista que, doar sangue encoraja as pessoas a pensar no próximo, a cuidar de pessoas que elas nem mesmo conhecem, fora que o doar sangue por virtude da ação aumenta o sangue que os hospitais podem usar para salvar vidas.</h5>

        </div>
    
    <br><br><br><br>


    <h1>Semana da ETEC - 2019</h1>
    <div id="carouselsem"> 
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="public/Imagens/posts/01SemanaEtec.jpg" style="width:100%; height:600px;" alt="Primeiro Slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="public/Imagens/posts/02SemanaEtec.jpg" style="width:100%; height:600px;" alt="Segundo Slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="public/Imagens/posts/Stand.jpg" style="width:100%; height:600px;" alt="Terceiro Slide">
            </div>
        </div>
    </div>
    </div>
<br><br><br><br><br><br><br><br><br><br>
    
    <!-- CÓDIGO PARA APARECER REDES SOCIAIS -->
    <h1>Equipe Doe & Salve</h1>
    <div id="form" class="containerft">
        <div class="row">
        <div class="col-md-4">
            <div class="box21">
                <img src="public/Imagens/integrantes/ANDRE.jpeg" style="width:250px; height:250px; margin-left:48px; margin-top:10px; border:2px solid trasparent; border-radius:250px;">
                    <div class="box-content">
                        <h4 class="title">André Colossale</h4>
                        <a target="_blank" href="https://www.facebook.com/"><i class="fab fa-facebook-f mx-3"></i></a>
                        <a target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram mx-3"></i></a>
                    </div>
                </div>
            </div>
        <div class="col-md-4">
            <div class="box21">
                <img src="public/Imagens/integrantes/FABIO.jpg" style="width:248px; height:248px; margin-left:48px; margin-top:10px; border:2px solid trasparent; border-radius:250px;">
                    <div class="box-content">
                        <h4 class="title">Fabio Casa</h4>
                        <a target="_blank" href="https://www.twitter.com/"><i class="fab fa-twitter mx-3"></i></a>
                        <a target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram mx-3"></i></a>
                    </div>
                </div>
            </div>
        <div class="col-md-4 col-sm-6">
            <div class="box21">
                <img src="public/Imagens/integrantes/OLIVEIRA.jpeg" style="width:250px; height:250px; margin-left:48px; margin-top:10px; border:2px solid trasparent; border-radius:250px;">
                    <div class="box-content">
                        <h4 class="title">Gabriel Oliveira</h4>
                        <a target="_blank" href="https://www.facebook.com/"><i class="fab fa-facebook-f mx-3"></i></a>
                        <a target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram mx-3"></i></a>
                    </div>
                </div>
            </div>
        </div>

    <br><br><br>

    <div class="row">
        <div class="col-md-4">
            <div class="box21">
                <img src="public/Imagens/integrantes/LUAN.jpeg" style="width:250px; height:250px; margin-left:48px; margin-top:10px; border:2px solid trasparent; border-radius:250px;">
                    <div class="box-content">
                        <h4 class="title">Luan Marcon</h4>
                        <a target="_blank" href="https://www.facebook.com/"><i class="fab fa-facebook-f mx-3"></i></a>
                        <a target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram mx-3"></i></a>
                    </div>
                </div>
            </div>
        <div class="col-md-4">
            <div class="box21">
                <img src="public/Imagens/integrantes/CUENCA.jpeg" style="width:250px; height:250px; margin-left:48px; margin-top:10px; border:2px solid trasparent; border-radius:250px;">
                    <div class="box-content">
                        <h4 class="title">Matheus Cuenca</h4>
                        <a target="_blank" href="https://www.facebook.com/"><i class="fab fa-facebook-f mx-3"></i></a>
                        <a target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram mx-3"></i></a>
                    </div>
                </div>
            </div>
        <div class="col-md-4 col-sm-6">
            <div class="box21">
                <img src="public/Imagens/integrantes/MATHEUZINHO.jpeg" style="width:250px; height:250px; margin-left:48px; margin-top:10px; border:2px solid trasparent; border-radius:250px;">
                    <div class="box-content">
                        <h4 class="title">Matheus Vinicius</h4>
                        <a target="_blank" href="https://www.facebook.com/"><i class="fab fa-facebook-f mx-3"></i></a>
                        <a target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram mx-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>  

        <br><br>

            <!-- COLOCAR A FOTO DA SEMANA DA ETEC COMO CAROUSEL -->

    
    <br><br><br><br>

        <div id="containercolor">
            <div class="d-none d-md-block">
                <span class="mr-3"><h4>Siga-nos</h4></span>
                <br><br>
                    <a href="http://facebook.com/Doe-Salve-258012758462964/?ref=bookmarks" target="_blank"><i class="fab fa-facebook-f mx-3"></i></a>
                    <a href="https://instagram.com/_doeesalve?igshid=islxuj7qmo36" target="_blank"><i class="fab fa-instagram mx-3"></i></a>
                    <a href="https://twitter.com/SalveDoe?s=08" target="_blank"><i class="fab fa-twitter mx-3"></i></a>
            </div>

            <br><br>

    </div>

    </center>

    </body>
    <script src="public/libs/bootstrap/jquery/jquery-3.3.1.min.js"></script>
    <script src="public/libs/bootstrap/popper/popper.min.js"></script>
    <script src="public/libs/bootstrap/js/bootstrap.min.js"></script>
    <script>
    function funcao1()
    {
    alert("É necessário fazer login para acessar essa página");
    }
    </script>
</html>

<!-- recuperar senha

https://www.devmedia.com.br/forum/recuperar-senha-e-enviar-por-email-com-php/488077

-->