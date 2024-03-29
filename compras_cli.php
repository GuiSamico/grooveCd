<?php
    require_once 'conexao.php';
    session_start();
    if(!isset($_SESSION['logado'])):
        header('location:index.php');
    endif;
    $cpfCliente = $_GET['cpf'];
    $idcliente = $_GET['idcliente'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Groove CD - Minhas Compras</title>
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
    <a href="javascript:history.back()" style="color:black;text-decoration:none; position:relative;top:50px; left:30px;"><button style=" font-size:15px;">Voltar</button></a>
    <div class="container3">
        <h2 style="margin-top:100px;">Minhas Compras</h2>
        <table id="tabela" class="table table-bordered table-hover">
            <thead>
                <tr class="th">
                    <th>CD</th>
                    <th>Valor</th>
                    <th>Forma de Pagamento</th>
                    <th>Emitir boleto</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM compra WHERE cpfCliente = '$cpfCliente'";
                    $resultado = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_array($resultado)):
                ?>
                <tr>
                    <?php
                        $idcompra = $row['id'];
                    ?>
                    <td><?php echo utf8_encode($row['tituloCd'])?></td>
                    <td><?php echo utf8_encode($row['valorTotal'])?></td>
                    <td><?php echo $row['formaPagamento']?></td>
                    <td><a href="#" onclick="window.open('boletos/boleto_bradesco.php?idcompra=<?php echo $idcompra?>&idcliente=<?php echo $idcliente?>','mywindow','location=1,status=1,scrollbars=1,width=750,height=500');"><img src="img/boleto.png" width="30px;"></td></a>
                </tr>
                <?php
                    endwhile;
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
