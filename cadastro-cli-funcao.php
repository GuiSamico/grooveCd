<?php
    require_once 'conexao.php';

    $nome = mysqli_escape_string($conn,$_POST['nome']);
    $email = mysqli_escape_string($conn,$_POST['email']);
    $cpf = mysqli_escape_string($conn,$_POST['cpf']);
    $telefone = mysqli_escape_string($conn,$_POST['telefone']);
    $login = mysqli_escape_string($conn,$_POST['login']);
    $senha = mysqli_escape_string($conn,$_POST['senha']);


    $sql = "INSERT INTO cliente (nome, email, cpf, telefone, login, senha)";
    $sql.= "values";
    $sql.= "('$nome','$email','$cpf','$telefone','$login', md5('$senha'));";

    mysqli_query($conn,$sql);

    header('location:index.php');
?>
