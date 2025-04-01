<?php
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["username"]!=='biblio'|| $_SESSION["loggedin"] !== true){
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

        <div>
            <p> </n>
                <?php
                    if(file_exists("listarPedido.txt")){
                     $file = fopen("listarPedido.txt", "r");
                        while(!feof($file)){
                        echo fgets($file)."<br>";
                        }
                        fclose($file);
                    }
                ?>
            </p> </n>
        </div>

        <p>
        
        <button class="btn btn-danger" onclick="window.history.back();">Voltar</button>
            <a href="logout.php" class="btn btn-danger">Sair da conta</a>
        </p>

    </body>
    
</html>