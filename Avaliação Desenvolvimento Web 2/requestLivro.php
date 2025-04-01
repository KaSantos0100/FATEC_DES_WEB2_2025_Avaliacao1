<?php
    require './cadastroLivro.php';
    $titulo = $_POST['tituloLivro'];
    $autor = $_POST['autor'];
    $editora = $_POST['editora'];
    $isbn = $_POST['ISBN'];

        $info ="$titulo | $autor | $editora | $isbn". PHP_EOL;

        $handle = fopen("listarLivro.txt", "a");
        fwrite($handle, $info);
        fclose($handle);
        header("location: ./cadastroLivro.php");
?>