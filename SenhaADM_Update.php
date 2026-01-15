<?php 
    //Iniciancdo a sessao !!!! Seguranca
    session_start();

    //Verificando se session esta vigente

    //Conexao
    require("Conexao.php");




    //Recuperando valores   
    $id_loginuser = $_POST['id_loginuser'];
    $usuario      = $_POST['usuario'];
    $nome      = $_POST['nome'];
    $senha      = $_POST['senha'];
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
    <header class="container-fluidx">
            <div id="barra-topo" class="py-3">
                <div class="d-flex justify-content-center justify-content-md-between">
                    <div class="text-center">
                        <img src="public/imagens/logo.png" id="logo-topo" alt="Logo - Doe e Salve">
                    </div>
                    <div class="d-none d-md-block">
                        <span class="mr-3">Siga-nos</span>
                        <a target="_blank" href="https://www.facebook.com/"><i class="fab fa-facebook-f mx-3"></i></a>
                        <a target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram mx-3"></i></a>
                        <a target="_blank" href="https://www.twitter.com/"><i class="fab fa-twitter mx-3"></i></a>
                    </div>
                </div>
            </div>


                   

                    <div class="col-1 d-flex justify-content-end">
                        <span class="pr-3 py-1">
                            <p>Bem-Vindo(a), <?php echo $_SESSION['nome'] ?></p>
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
                    <th class="text-center">Nome de Usuário</th>
                    <th class="text-center">Nome</th>
                    <th class="text-center">Senha</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <form class="form-group" method="POST" action=    " DoADM.php">
                    <input type="hidden"   name="id_loginuser" value="<?php echo $id_loginuser ?>">
                    <td><input type="text" name="usuario"      value="<?PHP echo $usuario ?>" readonly="readonly">*inalterável*</td>
                    <td><input type="text" name="nome"      value="<?PHP echo $nome ?>" readonly="readonly">*inalterável*</td>
                    <td><input type="text" name="senha"      value="<?PHP echo $senha ?>"></td>
            </tbody>
        </table>
        <div class="col-sm-2">
                <button class="btn btn-danger">
                    Atualizar!!!
                </button>
            </div>        
    <script src="public/libs/bootstrap/jquery/jquery-3.3.1.min.js"></script>
    <script src="public/libs/bootstrap/popper/popper.min.js"></script>
    <script src="public/libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script
</body>
</html>