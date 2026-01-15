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
    <link rel="stylesheet" href="public/css/teste.css">
    <link rel="stylesheet" href="public/css/Style.css">
    <link rel="stylesheet" href="public/libs/font-awesome/css/all.css">

   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <style>
      #map {
        width: 750px;
        height: 450px;
      }

      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>

    <title>Doe e Salve - Locais</title>

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
                                <a class="nav-link" type="button" href="Index.php" style="background-color: #fff">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" type="button" href="#" style="background-color: #fff">Locais</a>
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
                                <a class="nav-link" type="button" href="#" style="background-color: #fff">Locais</a>
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

    <br><br><br>

    <center>

    <!-- Hemocentros serão mostrados a partir da cidade da pessoal -->

<div class="containermap">
    <div class="row">

        <!-- JavaScript Mapa -->

        <div id="map">
        <p><iframe src="https://batchgeo.com/map/01acc85df1d018662b44466660204c83" frameborder="0" width="100%" height="550" style="border:1px solid #aaa;"></iframe></p><p><small>View <a href="https://batchgeo.com/map/01acc85df1d018662b44466660204c83">Doe e Salve</a> in a full screen map</small></p>
        </div>
    </div>
</div>
           
    <br><br><br><br><br><br><br><br><br>


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

    <script type="text/javascript" src="public/js/Script.js"></script>
    <script type="text/javascript" src="public/js/HabilitarCampo.js"></script>

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

    </body>
</html>

<!-- Entrar/Cadastrar não funciona -->

<!-- https://forum.imasters.com.br/topic/473582-resolvido%C2%A0habilitar-campo-ap%C3%B3s-preencher-outro/ -->

<!-- https://www.youtube.com/watch?v=W1PdR2b5Yu0 -->

<!-- (Abaixo) Aparecer dados do horario de funcionamento -->
<!-- https://www.w3schools.com/howto/howto_js_toggle_hide_show.asp -->

<!-- https://www.w3schools.com/jquery/jquery_hide_show.asp -->

<!-- Tabela dos hemocentros <button data-toggle="collapse"> -->

<!-- Linha 48 dg-flex bg-warning -->

<!-- Evento OnChange -->

<!-- Aplicação Spring -->

<!-- <div id="mapa" class="col-md-6">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3653.458105250656!2d-46.55150428495431!3d-23.69532947243849!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce4230e86e2165%3A0xa945f637af54fea3!2sETEC+Lauro+Gomes!5e0!3m2!1spt-BR!2sbr!4v1535569873377" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div> 

   
        https://codepen.io/acxix92/pen/OQbxxj

        -->