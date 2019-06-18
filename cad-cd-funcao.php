<?php
    require_once 'conexao.php';

    $titulo = mysqli_escape_string($conn,$_POST['titulo']);
    $preco = mysqli_escape_string($conn,$_POST['preco']);
    $genero = mysqli_escape_string($conn,$_POST['genero']);


    $sql = "INSERT INTO cd (titulo, preco, genero)";
    $sql.= "values";
    $sql.= "('$titulo','$preco','$genero');";

    mysqli_query($conn,$sql);

    header('location:admin.php');
?>
