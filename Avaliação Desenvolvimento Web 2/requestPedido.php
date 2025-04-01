<?php
require './cadastroPedido.php';


        $tituloLivro = $_POST['tituloLivro'];
        $autor = $_POST['autor'];
        $editora = $_POST['editora'];
        $isbn = $_POST['ISBN'];
   
        $info = "$tituloLivro | $autor | $editora | $isbn" .PHP_EOL;

        $handle = fopen("listarPedido.txt", "a");
        fwrite($handle, $info);
        fclose($handle);
        header("location: ./cadastroPedido.php");
?>