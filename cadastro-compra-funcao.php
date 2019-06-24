<?php
    require_once 'conexao.php';

    $artista = mysqli_escape_string($conn,$_POST['tituloCd']);
    $endereco = mysqli_escape_string($conn,$_POST['endereco']);
    $cpf = mysqli_escape_string($conn,$_POST['cpf']);
    $formaPagamento = mysqli_escape_string($conn,$_POST['formaPagamento']);
    $valor = mysqli_escape_string($conn,$_POST['valor']);


    $sql = "INSERT INTO compra (formaPagamento, endereco, valorTotal, cpfCliente, tituloCd)";
    $sql.= "values";
    $sql.= "('$formaPagamento','$endereco','$valor','$cpf','$artista');";

    mysqli_query($conn,$sql);
    echo "<script>
            alert('Compra realizada');
            window.location.replace('cliente.php');
        </script>";
?>
