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
    $idcliente = $row['id'];
    $cpfCliente = $row['cpf'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Groove CD</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="jquery/ajax.js"></script>
    <link rel="stylesheet" href="css/datatable.css">
    <script src="js/datatable.js"></script>
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:400">
    <link rel="stylesheet" href="css/index.css">
    <script>
        $(document).ready( function () {
            $('#tabela').DataTable({
                "language": {
                    "lengthMenu": "Mostrando _MENU_ registros por página",
                    "zeroRecords": "Nada encontrado",
                    "info": "Mostrando página _PAGE_ de _PAGES_",
                    "infoEmpty": "Nenhum registro disponível",
                    "infoFiltered": "(filtrado de _MAX_ registros no total)",
                    "paginate":{
                        "next": "proximo",
                        "previous": "anterior"
                    },
                    "search": "Filtrar"
                }
            });
        });
    </script>
</head>
<body>
    <a href="logout.php" style="color:black;text-decoration:none; position:relative;top:50px; left:30px;"><button style=" font-size:15px;">Logout</button></a>

    <a href="compras_cli.php?cpf=<?php echo $cpfCliente;?>&idcliente=<?php echo $idcliente?>" style="color:black;text-decoration:none; position:relative;top:50px; left:1100px;"><button style=" font-size:15px;">Minhas compras</button></a>

    <h1 style="margin-top:100px; margin-left:50px; margin-bottom:30px;">CD's disponíveis</h1>

    <div class="container3">
        <table id="tabela" class="table table-bordered table-hover">
            <thead>
                <tr class="th">
                    <th>Artista</th>
                    <th>Genero</th>
                    <th>Preco</th>
                    <th>Comprar</th>
                </tr>
            </thead>
            <tbody class="td">
                <?php
                    $sql = "SELECT * FROM cd";
                    $resultado = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_array($resultado)):
                ?>
                <tr>
                    <td><?php echo $row['artista']?></td>
                    <td><?php echo $row['genero']?></td>
                    <td><?php echo $row['preco']?></td>
                    <td><a href="comprar.php?id=<?php echo $row['id']?>&cpf=<?php echo $cpfCliente?>"><img src="img/comprar.png" class="icono"></a></td>
                </tr>
                <?php
                    endwhile;
                ?>
            </tbody>
        </table>
    </div>


    <h1 style="margin-top:140px; margin-left:50px; margin-bottom:-30px;">Principais faixas de cada gênero</h1>
    <div class="container2">
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

</body>
</html>
