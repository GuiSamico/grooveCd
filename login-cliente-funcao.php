<?php
    require_once 'conexao.php';
    session_start();
    //admin

    $erros = array();
    $login = mysqli_real_escape_string($conn,$_POST['login']);
    $senha = mysqli_real_escape_string($conn,$_POST['senha']);

    $query = "SELECT login FROM cliente WHERE login = '{$login}' and senha = md5('{$senha}')";
    $result = mysqli_query($conn, $query);
    $row = mysqli_num_rows($result);

    if($row == 1){
        $_SESSION['logado'] = true;
        $_SESSION['usuario'] = $login;
        header('location:cliente.php');
        exit();
    }else{
        $_SESSION['nao_autenticado'] = true;
        header('location:login-admin.php');
        exit();
    }
?>
