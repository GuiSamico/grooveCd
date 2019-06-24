<?php
    require_once 'conexao.php';
    session_start();
    if(!isset($_SESSION['logado'])):
        header('location:index.php');
    endif;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Groove CD - Admin</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="jquery/ajax.js"></script>
    <link rel="stylesheet" href="css/datatable.css">
    <script src="js/datatable.js"></script>
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
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
                        "next": "<img src='img/seta-d.png'>",
                        "previous": "<img src='img/seta-e.png'>"
                    },
                    "search": "Filtrar"
                }
            });
        });
    </script>
</head>
<body>
    <div class="container">
        <a href="logout.php" style="color:black;text-decoration:none; position:relative;top:-50px; left:-70px;"><button>Logout</button></a>
        <h2>Clientes</h2>
        <table id="tabela" class="table table-bordered table-hover">
            <thead>
                <tr class="th">
                    <th>Nome</th>
                    <th>Email</th>
                    <th>CPF</th>
                    <th>Telefone</th>
                    <th>Excluir</th>

                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM cliente";
                    $resultado = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_array($resultado)):
                ?>
                <tr>
                    <?php
                        $id = $row['id'];
                    ?>
                    <td><?php echo utf8_encode($row['nome'])?></td>
                    <td><?php echo utf8_encode($row['email'])?></td>
                    <td><?php echo $row['cpf']?></td>
                    <td><?php echo $row['telefone']?></td>
                    <td><a href="excluir-cliente.php?id=<?php echo $id?>" onclick="return confirm('Tem certeza?');"><img width="40px;" src="img/iconexcluir.png" class="iconop"></a></td>
                </tr>
                <?php
                    endwhile;
                ?>
            </tbody>
        </table>


        <div id="cd" style="position:relative;left:250px;top:50px;">
            <h3>Cadastrar CD</h3>
            <form class="" action="cad-cd-funcao.php" method="post" style="border:2px solid black;padding:40px;border-radius:20px;">
                <p>Artista:<input type="text" name="artista" id="artista" style="height:30px;border-radius:10px;margin-left:10px;"></p><br>
                <p>Preco:<input type="text" name="preco" id="preco" style="height:30px;border-radius:10px;margin-left:10px;"></p><br>
                <p>Gênero:<input type="text" name="genero" id="genero" style="height:30px;border-radius:10px;margin-left:10px;"></p>
                <button type="submit" name="button">Cadastrar</button>
            </form>
        </div>

        <h2 style="position:relative;top:400px;left:-300px;">CD's</h2>
        <table id="tabela" class="table table-bordered table-hover" style="position:relative;top:100px;">
            <thead>
                <tr class="th">
                    <th>Artista</th>
                    <th>Preco</th>
                    <th>Genero</th>
                    <th>Excluir</th>

                </tr>
            </thead>
            <tbody>
                <?php
                    $sql2 = "SELECT * FROM cd";
                    $resultado2 = mysqli_query($conn, $sql2);
                    while($row2 = mysqli_fetch_array($resultado2)):
                ?>
                <tr>
                    <?php
                        $id = $row2['id'];
                    ?>
                    <td><?php echo utf8_encode($row2['artista'])?></td>
                    <td><?php echo utf8_encode($row2['preco'])?></td>
                    <td><?php echo $row2['genero']?></td>
                    <td><a href="excluir-cd.php?id=<?php echo $id?>" onclick="return confirm('Tem certeza?');"><img width="40px;" src="img/iconexcluir.png" class="iconop"></a></td>
                </tr>
                <?php
                    endwhile;
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
