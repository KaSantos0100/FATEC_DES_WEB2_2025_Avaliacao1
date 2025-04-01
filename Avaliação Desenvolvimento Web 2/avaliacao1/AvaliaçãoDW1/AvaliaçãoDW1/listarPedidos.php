<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

?>
 
<!DOCTYPE html>
<html lang="pt_BR">

<head>

    <meta charset="UTF-8">
    <title>Lista de Livro Pedidos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>

</head>

<body>

    <div class="page-header">
        <h1> Lista de Livro Pedidos <b><?php echo htmlspecialchars($_SESSION["username"]); ?>
        <br>
        </b>.Verificar Solicitações.</h1>
    </div>

    <?php
        if(file_exists("listarPedidos.txt")){
            $file = fopen("listarPedidos.txt", "r");
            while(!feof($file)){
            echo fgets($file). "<br>";
            }
            fclose($file);
            }

    ?>

    <p>
        <!-- 
        <a href="cadastro.php" class="btn btn-primary">Cadastro Pessoas</a>
        <br><br>
        <a href="logout.php" class="btn btn-danger">Sair da conta</a>
        -->
        
        <a href="bibliotecario.php" class="btn btn-danger">Voltar</a>
        <a href="logout.php" class="btn btn-danger">Sair da conta</a>

        
    </p>
</body>
</html>