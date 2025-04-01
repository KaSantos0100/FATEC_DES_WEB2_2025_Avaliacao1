<?php
    // Incluir o arquivo de cadastro
    require './cadastroPedido.php';

    // Receber os dados via POST
    $TituloLivro = $_POST['TituloLivro'];
    $Autor = $_POST['Autor'];
    $Editora = $_POST['Editora'];
    $ISBN = $_POST['ISBN'];

    // Preparar os dados para gravar no arquivo
    $conteudo = [
        'TituloLivro' => $TituloLivro,
        'Autor' => $Autor,
        'Editora' => $Editora, // Certifique-se de que o nome da chave está correto
        'Tombo' => $ISBN, // Usando o ISBN como Tombo
    ];

    // Abrir o arquivo para adicionar os dados
    $file = fopen("listarLivro.txt", "a");

    if ($file) {
        // Escrever os dados no arquivo, usando "|" como delimitador
        fwrite($file, implode("|", $conteudo) . PHP_EOL);
        
        // Garantir que os dados foram gravados corretamente
        fflush($file);
        fclose($file);
    } else {
        echo "Erro ao abrir o arquivo!";
    }

    // Redirecionar de volta para a página de cadastro
    header("Location: ./cadastroLivro.php");
    exit; // Adicionar exit após header para evitar que o código continue executando
?>