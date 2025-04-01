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
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Olá, <b><?php echo htmlspecialchars($_SESSION["username"]); ?>
        <br>
        </b>.Bem vindo a Bliblioteca .</h1>

        <p> No que posso te ajudar hoje  ? </p>
        <a href="cadastroPedido.php" class="btn btn-danger">Cadastrar Pedido</a></b>
        <a href="listarLivros.php" class="btn btn-danger">Listar Livros</a></b>
        
    </div>
    <p>
        <!-- 
        <a href="cadastro.php" class="btn btn-primary">Cadastro Pessoas</a>
        <br><br>
        -->
        <a href="logout.php" class="btn btn-danger">Sair da conta</a>
    </p>
</body>
</html>