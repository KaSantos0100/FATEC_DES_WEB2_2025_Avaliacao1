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
<body class="p-4 flex " style="justify-content: center; align-items: center;background-color: #8e8e8e;">
    <div class="page-header">
        <h1>Olá, <b><?php echo htmlspecialchars($_SESSION["username"]); ?>
        <br>
        </b>.Registrar Pedido.</h1>
    </div>
        <!-- Mudar orientação arquivo de registro-->
     <form action="requestPedido.php" method="POST">
        <div style="background-color: whitesmoke; width: 80%;border: black; border-radius: 8px;" class="p-4">
            <h1> Pedido de Livros</h1>

            <div class="form-floating p-2" style="width: 50%;">
                <input
                    type="text"
                    class="form-control"
                    id="Titulo Livro"
                    name="Titulo Livro"
                    placeholder=" ... " />
                <label for="request">Titulo do Livro</label>
            </div>

            <div class="form-floating p-2" style="width: 50%;">
                <input
                    type="text"
                    class="form-control"
                    id="Autor"
                    name="Autor"
                    placeholder="..." />
                <label for="request">Autor</label>
            </div>

            <div class="form-floating p-2" style="width: 50%;">
                <input
                    type="text"
                    class="form-control"
                    id="Editora"
                    name="Editora"
                    placeholder="..." />
                <label for="request">Editora</label>
            </div>

            <div class="form-floating p-2" style="width: 50%;">
                <input
                    type="text"
                    class="form-control"
                    id="ISBN"
                    name="ISBN"
                    placeholder="..." />
                <label for="request">ISBN</label>
            </div>

            <div>
                <button type="submit" class="btn btn-success p-2">Enviar</button>
            </div>
            
            <div class="p-2">
                <a href="professor.php" class="btn btn-danger">Voltar</a>
                <a href="logot.php" class="btn btn-danger">Sair da conta</a>

            </div>
        </div>
    </form>
</body>
</html>