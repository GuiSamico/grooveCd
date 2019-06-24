<?php
    require_once 'conexao.php';

    $artista = mysqli_escape_string($conn,$_POST['artista']);
    $preco = mysqli_escape_string($conn,$_POST['preco']);
    $genero = mysqli_escape_string($conn,$_POST['genero']);


    $sql = "INSERT INTO cd (artista, preco, genero)";
    $sql.= "values";
    $sql.= "('$artista','$preco','$genero');";

    mysqli_query($conn,$sql);

    header('location:admin.php');
?>
