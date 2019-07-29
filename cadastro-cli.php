
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Groove CD - Cadastro</title>
    <link rel="shortcut icon" href="img/favicon.png">
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
    <script src="jquery/jquery.maskedinput.min.js"></script>
    <script>
        $(document).ready( function () {
            jQuery("#cpf").mask("999.999.999-99");
            jQuery("#telefone").mask("(99) 99999-9999");
        });
    </script>
</head>
<body>
    <div class="container">
        <div id="logo">
            <img src="img/logo.png" style="position:relative;left:480px;top:-50px;"></a>
        </div>

        <div id="form" style="position:relative;left:210px;top:200px;">
            <form class="" action="cadastro-cli-funcao.php" method="post" style="border:2px solid black;padding:40px;border-radius:20px;">
                <p>Nome:<input required type="text" name="nome" id="nome" style="height:30px;border-radius:10px;margin-left:10px;"></p><br>
                <p>Email:<input required type="text" name="email" id="email" style="height:30px;border-radius:10px;margin-left:10px;"></p><br>
                <p>CPF:<input required type="text" name="cpf" id="cpf" style="height:30px;border-radius:10px;margin-left:10px;"></p><br>
                <p>Telefone:<input required type="text" name="telefone" id="telefone" style="height:30px;border-radius:10px;margin-left:10px;"></p><br>
                <p>Login:<input required type="text" name="login" id="login" style="height:30px;border-radius:10px;margin-left:10px;"></p><br>
                <p>Senha:<input required type="password" name="senha" id="senha" style="height:30px;border-radius:10px;margin-left:10px;"></p>
                <button type="submit" name="button">Cadastrar</button>
            </form>
        </div>
    </div>
</body>
</html>
