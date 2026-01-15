<?php 
    //Iniciancdo a sessao !!!! Seguranca
    session_start();

    //Verificando se session esta vigente
    
    // 1) Incluindo o arquivo de conexao
    include("Conexao.php");

    // 2) Query de select
    $sql = "SELECT * FROM cadastro02";

    // 3) Executa a ¨%$$# da query
    $resultado = mysqli_query($con,$sql);

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

    <title>Doe e Salve - Editar Dados</title>

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
                                <a class="dropdown-item" href="Logout.php">Sair</a>
                            </div>
                        </span>
                    </div>
            <!-- </div> -->
        </header>
        <center>
        <h1>Login</h1>
        </center>
        <br>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="text-center">Email</th>
                    <th class="text-center">Senha</th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php 
                    while($linha = mysqli_fetch_array($resultado)) {
                        echo "
                            <tr>
                                <td class='text-center'>".$linha['email']." </td>
                                <td class='text-center'>".$linha['senha']."</td>
                                <td class='text-center'>
                                    <form action='VerCad4_Update.php' method='POST'>
                                        <button class='btn btn-warning'><i class='glyphicon glyphicon-pencil'></i></button>
                                        <input type='hidden' name='id_usuario' value=".$linha['id_usuario'].">
                                        <input type='hidden' name='email' value=".$linha['email'].">
                                        <input type='hidden' name='senha' value=".$linha['senha'].">
                                    </form>
                                </td>
                            </tr>
                        ";
                    }
                ?>
            </tbody>
        </table> 
        <section class="intro-section2">
        <div class="container">
            <div class="row">
                <br><br><br>
                <div class="mx-auto" style=width: "100px;">
                    <a href="VerCad.php" class="read-more"><h3 style="color:#000; margin-top: 60px">Verificar endereço</h3></a>
                </div>
                <div class="mx-auto" style=width: "200px;">
                    <a href="VerCad2.php" class="read-more"><h3 style="color:#000; margin-top: 60px">Verificar contatos</h3></a>
                </div>
                <div class="mx-auto" style=width: "200px;">
                    <a href="VerCad3.php" class="read-more"><h3 style="color:#000; margin-top: 60px">Alterar senha</h3></a>
                </div>
                <br><br><br><br><br><br><br>
            </div>
        </div>
    </section>       
    <script src="public/libs/bootstrap/jquery/jquery-3.3.1.min.js"></script>
    <script src="public/libs/bootstrap/popper/popper.min.js"></script>
    <script src="public/libs/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>