<?php
session_start();

    include("Conexao.php");

    $sql = "SELECT * from avaliar";

    $result = mysqli_query($con,$sql);  

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

    <title>Doe e Salve - Avaliação</title>

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
                                <a class="nav-link" type="button" href="#" style="background-color: #fff">Avalie</a>
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
                </div>
            <!-- </div> -->
        </header>
        
    <center>

        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg']."<br><br>";
            unset($_SESSION['msg']);
        }
        ?>

                    <h2>Avaliações e perguntas frequentes</h2>
                    <br><br><br>
                    <h6> <i class="far fa-question-circle"></i>    Avalie, de 1 a 5 (um a cinco) estrelas, o quanto nosso site agilizou o processo de doação de sangue:</h6>

                    <br>

        <form method="POST" action="DoAvaliacao.php" enctype="multipart/form-data">
            <div class="estrelas">
                <input type="radio" id="vazio" name="estrela" value="0" checked >
                
                <label for="estrela_um"><i class="fa"></i></label>
                <input type="radio" id="estrela_um" name="estrela" value="1">
                
                <label for="estrela_dois"><i class="fa"></i></label>
                <input type="radio" id="estrela_dois" name="estrela" value="2">
                
                <label for="estrela_tres"><i class="fa"></i></label>
                <input type="radio" id="estrela_tres" name="estrela" value="3">
                
                <label for="estrela_quatro"><i class="fa"></i></label>
                <input type="radio" id="estrela_quatro" name="estrela" value="4">
                
                <label for="estrela_cinco"><i class="fa"></i></label>
                <input type="radio" id="estrela_cinco" name="estrela" value="5">
                
                <br><br>
                  
            </div>

            <div class ="containertable">

                <form method="POST" action="DoAvaliacao.php">

                    <div class="col-md-4">

                        <input type="text" class="form-control" name="opiniao" Placeholder="Opinião/Sugestão ou dúvida sobre sua experiência">

                            <br>

                        <input type="submit" class="btn btn-danger" value="Enviar">

                    </div>

                </form>

    <p><br>

                <div>
                <h4>Opiniões registradas:</h4>
                </div>
                <br>

            <!-- <table class="ratingtable"> -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nota:</th>
                        <th>Opinião:</th>
                    </tr>
                </thead>

            <?php

                while ($linha = mysqli_fetch_array($result))
                {
                    echo "
                        <tr>
                            <td>".$linha['estrela']."</td>
                            <td>".$linha['opiniao']."</td>
                        
                            <td>
                                <form method='POST' action=''>
                                    <input type='hidden' name='estrela' value='".$linha['estrela']."'>
                                    <input type='hidden' name='opiniao' value='".$linha['opiniao']."'>
                                </form>
                            </td>                      
                        </tr>
                        ";
                }

            ?>   
            </table>
        </div>

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

    <script src="public/libs/bootstrap/jquery/jquery-3.3.1.min.js"></script>
    <script src="public/libs/bootstrap/popper/popper.min.js"></script>
    <script src="public/libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="public/js/Avaliacao.js"></script>

</body>
</html>

<!-- <textarea name="" rows="" cols=""></textarea> -->