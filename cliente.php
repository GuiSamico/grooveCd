<?php
    require_once 'conexao.php';
    session_start();
    if(!isset($_SESSION['logado'])):
        header('location:index.php');
    endif;
    $login = $_SESSION['login'];
    $sql = "SELECT * FROM cliente WHERE login = '$login'";
    $resultado = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($resultado);
    $id = $row['id'];
    $cpfCliente = $row['cpf'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Groove CD</title>
    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:400">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <a href="logout.php" style="color:black;text-decoration:none; position:relative;top:50px; left:30px;"><button style=" font-size:15px;">Logout</button></a>

    <a href="compras_cli.php?cpf=<?php echo $cpfCliente;?>" style="color:black;text-decoration:none; position:relative;top:50px; left:1100px;"><button style=" font-size:15px;">Minhas compras</button></a>

    <h1 style="margin-top:140px; margin-left:50px; margin-bottom:-30px;">Principais faixas de cada gênero</h1>
    <div class="container">
        <div class="box">
            <div class="imgBox">
                <img src="img/alineBarros.jpg" alt="">
            </div>
            <div class="details">
                <div class="content">
                    <h2>Aline Barros</h2>
                    <p>Ressucita-me</p>
                    <audio controls style="width:250px; position:relative; top:50px;">
                        <source src="audio/ressuscita-me.mp3" type="audio/mpeg">
                    </audio>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                <img src="img/amy.jpg" alt="">
            </div>
            <div class="details">
                <div class="content">
                    <h2>Amy Winehouse</h2>
                    <p>Back to black</p>
                    <audio controls style="width:250px; position:relative; top:50px;">
                        <source src="audio/back-to-black.mp3" type="audio/mpeg">
                    </audio>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                <img src="img/beethoven.jpg" alt="">
            </div>
            <div class="details">
                <div class="content">
                    <h2>Beethoven</h2>
                    <p>Fur elise</p>
                    <audio controls style="width:250px; position:relative; top:50px;">
                        <source src="audio/fur-elise.mp3" type="audio/mpeg">
                    </audio>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                <img src="img/belo.jpg" alt="">
            </div>
            <div class="details">
                <div class="content">
                    <h2>Belo</h2>
                    <p>Tudo mudou</p>
                    <audio controls style="width:250px; position:relative; top:50px;">
                        <source src="audio/tudo-mudou.mp3" type="audio/mpeg">
                    </audio>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                <img src="img/bobMarley.jpg" alt="">
            </div>
            <div class="details">
                <div class="content">
                    <h2>Bob Marley</h2>
                    <p>Is this love</p>
                    <audio controls style="width:250px; position:relative; top:50px;">
                        <source src="audio/is-this-love.mp3" type="audio/mpeg">
                    </audio>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                <img src="img/bruno.jpg" alt="">
            </div>
            <div class="details">
                <div class="content">
                    <h2>Bruno Mars</h2>
                    <p>Just the way you are</p>
                    <audio controls style="width:250px; position:relative; top:50px;">
                        <source src="audio/just-the-way-you-are.mp3" type="audio/mpeg">
                    </audio>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                <img src="img/edSheeran.jpg" alt="">
            </div>
            <div class="details">
                <div class="content">
                    <h2>Ed Sheeran</h2>
                    <p>Perfect</p>
                    <audio controls style="width:250px; position:relative; top:50px;">
                        <source src="audio/perfect.mp3" type="audio/mpeg">
                    </audio>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                <img src="img/eminem.jpg" alt="">
            </div>
            <div class="details">
                <div class="content">
                    <h2>Eminem</h2>
                    <p>Rap god</p>
                    <audio controls style="width:250px; position:relative; top:50px;">
                        <source src="audio/rap-god.mp3" type="audio/mpeg">
                    </audio>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                <img src="img/mariliaMendonca.jpg" alt="">
            </div>
            <div class="details">
                <div class="content">
                    <h2>Marilia Mendoça</h2>
                    <p>Ausência</p>
                    <audio controls style="width:250px; position:relative; top:50px;">
                        <source src="audio/ausencia.mp3" type="audio/mpeg">
                    </audio>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                <img src="img/marshmallo.jpg" alt="">
            </div>
            <div class="details">
                <div class="content">
                    <h2>Marshmallo</h2>
                    <p>Alone</p>
                    <audio controls style="width:250px; position:relative; top:50px;">
                        <source src="audio/alone.mp3" type="audio/mpeg">
                    </audio>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                <img src="img/queen.jpg" alt="">
            </div>
            <div class="details">
                <div class="content">
                    <h2>Queen</h2>
                    <p>Bohemian rhapsody</p>
                    <audio controls style="width:250px; position:relative; top:50px;">
                        <source src="audio/bohemian-rhapsody.mp3" type="audio/mpeg">
                    </audio>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                <img src="img/xand.jpg" alt="">
            </div>
            <div class="details">
                <div class="content">
                    <h2>Xand Avião</h2>
                    <p>Sábado à noite</p>
                    <audio controls style="width:250px; position:relative; top:50px;">
                        <source src="audio/sabado-a-noite.mp3" type="audio/mpeg">
                    </audio>
                </div>
            </div>
        </div>
    </div>







    <h1 style="margin-top:140px; margin-left:50px; margin-bottom:-30px;">CD's disponíveis</h1>
    <div class="container">
        <div class="box">
            <div class="imgBox">
                <img src="img/ze-neto-e-cristiano.jpg" alt="">
            </div>
            <div class="details">
                <div class="content" style="position:relative;left:5px;">
                    <h2>Zé Neto e Cristiano</h2>
                    <p>1. Largado Às Traças</p>
                    <p>2. Largado Às Traças</p>
                    <p>3. Largado Às Traças</p>
                    <p>4. Status Que Eu Não Queria</p>
                    <p>5. Bebida na Ferida</p>
                    <p><a href="comprar.php?id=5&cpf=<?php echo $cpfCliente?>"><button type="button" name="button">Comprar</button></a></p>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                <img src="img/thiago-matheus.jpg" alt="">
            </div>
            <div class="details">
                <div class="content" style="position:relative;left:5px;">
                    <h2>Thiago Matheus</h2>
                    <p>1. O Amante</p>
                    <p>2. Seu Zé</p>
                    <p>3. Eu Não Quero Casar</p>
                    <p>4. Amiga do Meu Amor</p>
                    <p>5. Colchão no Chão</p>
                    <p><a href="comprar.php?id=6&cpf=<?php echo $cpfCliente?>"><button type="button" name="button">Comprar</button></a></p>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                <img src="img/melim.jpg" alt="">
            </div>
            <div class="details">
                <div class="content" style="position:relative;left:5px;">
                    <h2>Melim</h2>
                    <p>1. Meu Abrigo</p>
                    <p>2. Ouvi Dizer</p>
                    <p>3. Dois Corações</p>
                    <p>4. Peça Felicidade</p>
                    <p>5. Transmissão de Pensamento</p>
                    <p><a href="comprar.php?id=7&cpf=<?php echo $cpfCliente?>"><button type="button" name="button">Comprar</button></a></p>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                <img src="img/jorge-e-mateus.jpg" alt="">
            </div>
            <div class="details">
                <div class="content" style="position:relative;left:5px;">
                    <h2>Jorge e Mateus</h2>
                    <p>1. Propaganda</p>
                    <p>2. Tijolão</p>
                    <p>3. Como Não Me Apaixonar</p>
                    <p>4. Aí Já Era</p>
                    <p>5. Os Anjos Cantam</p>
                    <p><a href="comprar.php?id=8&cpf=<?php echo $cpfCliente?>"><button type="button" name="button">Comprar</button></a></p>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                <img src="img/legiao.jpg" alt="">
            </div>
            <div class="details">
                <div class="content" style="position:relative;left:5px;">
                    <h2>Legião Urbana</h2>
                    <p>1. Tempo Perdido</p>
                    <p>2. Pais e Filhos</p>
                    <p>3. Índios</p>
                    <p>4. Vento No Litoral</p>
                    <p>5. Há Tempos</p>
                    <p><a href="comprar.php?id=9&cpf=<?php echo $cpfCliente?>"><button type="button" name="button">Comprar</button></a></p>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                <img src="img/racionais.jpg" alt="">
            </div>
            <div class="details">
                <div class="content" style="position:relative;left:5px;">
                    <h2>Racionais Mc's</h2>
                    <p>1. Jesus Chorou</p>
                    <p>2. Negro Drama</p>
                    <p>3. A Vida É Desafio</p>
                    <p>4. Diário De Um Detento</p>
                    <p>5. Artigo 157</p>
                    <p><a href="comprar.php?id=10&cpf=<?php echo $cpfCliente?>"><button type="button" name="button">Comprar</button></a></p>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                <img src="img/ferrugem.jpg" alt="">
            </div>
            <div class="details">
                <div class="content" style="position:relative;left:5px;">
                    <h2>Ferrugem</h2>
                    <p>1. Pirata e Tesouro</p>
                    <p>2. Sinto a Sua Falta</p>
                    <p>3. Pra Você Acreditar</p>
                    <p>4. Eu Juro</p>
                    <p>5. Paciência</p>
                    <p><a href="comprar.php?id=11&cpf=<?php echo $cpfCliente?>"><button type="button" name="button">Comprar</button></a></p>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                <img src="img/alok.jpg" alt="">
            </div>
            <div class="details">
                <div class="content" style="position:relative;left:5px;">
                    <h2>Alok</h2>
                    <p>1. All The Lies</p>
                    <p>2. Hear Me Now</p>
                    <p>3. Favela</p>
                    <p>4. Fuego</p>
                    <p>5. Ocean</p>
                    <p><a href="comprar.php?id=12&cpf=<?php echo $cpfCliente?>"><button type="button" name="button">Comprar</button></a></p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
