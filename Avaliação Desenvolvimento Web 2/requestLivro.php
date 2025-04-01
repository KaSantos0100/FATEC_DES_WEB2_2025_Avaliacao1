<?php 
    #Informar pagina de que foi POST originalmente
    require './cadastroLivro.php';
    // $TituloLivro = (explode(",TituloLivro",$_POST));
    // $Autor= (explode("Autor",$_POST));
    // $Editora= (explode("Editora",$_POST));
    // $ISBN= (explode("ISBN",$_POST));
    $TituloLivro = $_POST['TituloLivro'];
    $Autor= $_POST['Autor'];
    $Editora = $_POST['Editora'];
    $ISBN= $_POST['ISBN'];


    $conteudo = [
        'Titulo Livro' => $TituloLivro,
        'Autor' => $Autor,
        'editora' => $Editora,
        'Tombo' => $ISBN,
];

#Mudar nome dos .txts 
    
    $file = fopen("listarLivro.txt", "a");
    fwrite($file, implode("|", $conteudo)); 
  
    
    fflush($file);
    fclose($file);
    header("location: ./cadastroLivro.php");
    #Informar pagina de origem tbm 
?>