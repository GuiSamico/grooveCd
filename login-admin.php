
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Groove CD - Login</title>
    <link rel="shortcut icon" href="img/favicon.png">
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div class="container">
        <div id="logo">
            <img src="img/logo.png" style="position:relative;left:500px;top:-50px;"></a>
        </div>

        <div id="form" style="position:relative;left:250px;top:200px;">
            <form class="" action="login-admin-funcao.php" method="post" style="border:2px solid black;padding:40px;border-radius:20px;">
                <p>Login:<input type="text" name="login" id="login" style="height:30px;border-radius:10px;margin-left:10px;"></p><br>
                <p>Senha:<input type="password" name="senha" id="senha" style="height:30px;border-radius:10px;margin-left:10px;"></p>
                <button type="submit" name="button">Entrar</button>
            </form>
        </div>
    </div>
</body>
</html>
