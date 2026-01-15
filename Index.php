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

        <title>Doe e Salve</title>

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
                                    <a class="nav-link" type="button" href="#" style="background-color: #fff">Home</a>
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
        <!-- </div> -->


        <center>

         <div id="carouselfunc">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
             <div class="carousel-inner">
                <div class="carousel-item active">
                     <img src="public/Imagens/Carrosel - Porque doar sangue.jpg" alt="First Slide" class="d-block img-fluid w-100" >
                </div>
                <div class="carousel-item">
                     <img class="d-block img-fluid w-100" src="public/Imagens/19.jpg" alt="Second slide">
                </div>
               <div class="carousel-item">
                    <img class="d-block img-fluid w-100" src="public/Imagens/CARROSEL 2.jpg" alt="Third slide">
                </div>
            </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        </center>

        <!-- <div id="color"> -->
        <section class="intro-section">
    		<div class="container">
    			<div class="row">
                    <br><br><br>
    				<div class="mx-auto" style=width: "100px;">
                        <a href="FAQ.php" class="read-more"><h3 style="color:#fff; margin-top: 60px">FAQ</h3></a>
                           
                    </div>
                    <div class="mx-auto" style=width: "200px;">
                        <a onclick="funcao1()" href="#" class="read-more"><h3 style="color:#fff; margin-top: 60px">Avaliações</h3></a>
                    </div>
                    <br><br><br><br><br><br><br>
                </div>
            </div>
    	</section>
        <?php }
        else {?>

            <div class="d-flex">
                        <div class="col-11">
                            <ul class="nav nav-fill ">
                                <li class="nav-item">
                                    <a class="nav-link" type="button" href="#" style="background-color: #fff">Home</a>
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
                            </span>
                        </div>
                <!-- </div> -->
            </header>
        <!-- </div> -->


        <center>

         <div id="carouselfunc">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    </ol>
             <div class="carousel-inner">
                <div class="carousel-item active">
                     <img src="public/Imagens/Carrosel - Porque doar sangue.jpg" alt="First Slide" class="d-block img-fluid w-100" >
                </div>
                <div class="carousel-item">
                     <img class="d-block img-fluid w-100" src="public/Imagens/19.jpg" alt="Second slide">
                </div>
               <div class="carousel-item">
                    <img class="d-block img-fluid w-100" src="public/Imagens/CARROSEL 2.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid w-100" src="public/Imagens/CARROSEL 3.jpg" alt="fourth slide">
                </div>
            </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        </center>

        <!-- <div id="color"> -->
        <section class="intro-section">
            <div class="container">
                <div class="row">
                    <br><br><br>
                    <div class="mx-auto" style=width: "100px;">
                        <a href="FAQ.php" class="read-more"><h3 style="color:#fff; margin-top: 60px">FAQ</h3></a>
                    </div>
                    <div class="mx-auto" style=width: "200px;">
                        <a href="Avaliacao.php" class="read-more"><h3 style="color:#fff; margin-top: 60px">Avaliações</h3></a>
                    </div>
                    <br><br><br><br><br><br><br>
                </div>
            </div>
        </section>
        <?php } ?>
        <!-- </div> -->

        <!-- Inicio Copyright -->
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

        <!--Fim Copyright -->

        <script>
        
        </script>
        <script src="public/libs/bootstrap/jquery/jquery-3.3.1.min.js"></script>
        <script src="public/libs/bootstrap/popper/popper.min.js"></script>
        <script src="public/libs/bootstrap/js/bootstrap.min.js"></script>
        <script>
        function funcao1()
        {
        alert("É necessário fazer login para acessar essa página");
        }
        </script>
        <!-- <script src="public/js/teste/script.js"></script> -->
    </body>
    </html>


    <!-- https://getbootstrap.com/docs/4.3/components/carousel/ -->
    <!-- Os icones de redes sociais estão desaparecendo ao inves de ficar com o contorno branco -->
    <!-- https://www.html.am/reference/html-special-characters.cfm -->
    <!-- https://www.colsan.org.br/ pegar ideias -->