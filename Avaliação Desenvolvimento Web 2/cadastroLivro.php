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
    <title>Cadastro de livro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body class="p-4 flex " style="justify-content: center; align-items: center;background-color: #8e8e8e;">
    <div class="page-header">
        <!-- Sistema vai usar o username para identificar quem está utilizando o sistema-->
        <h1>Cadastro de Livro<b><?php echo htmlspecialchars($_SESSION["username"]); ?>
        <br>
        </b>Cadastrar  Livro </h1>
    </div>
        <!-- Mudar orientação arquivo de registro-->
     <form action="requestLivro.php" method="POST">
        <div style="background-color: whitesmoke; width: 80%;border: black; border-radius: 8px;" class="p-4">
            <h1> Cadastrar Livro</h1>

            <div class="form-floating p-2" style="width: 50%;">
                <input
                    type="text"
                    class="form-control"
                    id="Titulo Livro"
                    name="TituloLivro"
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

            <div class="p-2">
                <button type="submit" class="btn btn-success p-2">Enviar</button> 
            </div>
            
            <div class="p-2">
                <a href="bibliotecario.php" class="btn btn-danger">Voltar</a>
                <a href="logout.php" class="btn btn-danger">Sair da conta</a>
            </div>
        </div>
    </form>
</body>
</html>