<?php
    require_once 'conexao.php';
    session_start();
    if(!isset($_SESSION['logado'])):
        header('location:index.php');
    endif;

    $cpfCliente = $_GET['cpf'];
    $idcd = $_GET['id'];
    $sql2 = "SELECT * FROM cd WHERE id = '$idcd'";
    $resultado2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_array($resultado2);
    $artistaCd = $row2['artista'];
    $precoCd = $row2['preco'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Groove CD - Comprar</title>
    <link rel="shortcut icon" href="img/favicon.png">
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div class="container">
        <h2 style="position:relative;left:50px;top:0px;">Comprar CD</h2>

        <div id="form" style="position:relative;left:200px;top:50px;">
            <form class="" action="cadastro-compra-funcao.php" method="post" style="border:2px solid black;padding:40px;border-radius:20px;">
                <p>CD:<input type="text" name="tituloCd" id="tituloCd" value="<?php echo $artistaCd;?>" style="height:30px;border-radius:10px;margin-left:10px;"></p><br>

                <p>Endereço:<input type="text" name="endereco" id="endereco" style="height:30px;border-radius:10px;margin-left:10px;"></p><br>

                <p>CPF do Cliente:<input type="text" name="cpf" id="cpf" value="<?php echo $cpfCliente;?>" style="height:30px;border-radius:10px;margin-left:10px;"></p><br>

                <p>Forma de Pagamento:
                <select name="formaPagamento" id="formaPagamento" style="height:30px;border-radius:10px;margin-left:10px;">
                    <option value="dinheiro">Dinheiro</option>
                    <option value="cartao">Cartão</option>
                    <option value="boleto">Boleto</option>
                </select></p><br>

                <p>Valor Total:<input type="text" name="valor" id="valor" value="<?php echo $precoCd;?>" style="height:30px;border-radius:10px;margin-left:10px;"></p><br>

                <button type="submit" name="button">Comprar</button>
            </form>
        </div>
    </div>
</body>
</html>
