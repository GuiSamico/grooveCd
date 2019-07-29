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
    <title>Groove CD - Compras realizadas</title>
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
    <div class="container3" style="margin-top:100px;">
        <table id="tabela" class="table table-bordered table-hover">
            <thead>
                <tr class="th">
                    <th>ID</th>
                    <th>CD</th>
                    <th>Valor</th>
                    <th>Forma de Pagamento</th>
                    <th>Endereço</th>
                    <th>Cliente</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM compra";
                    $resultado = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_array($resultado)):
                        $cpfCliente = $row['cpfCliente'];
                        $sql1 = "SELECT * FROM cliente WHERE cpf = '$cpfCliente'";
                        $resultado1 = mysqli_query($conn, $sql1);
                        $row1 = mysqli_fetch_array($resultado1);
                        $cliente = $row1['nome'];
                ?>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo utf8_encode($row['tituloCd'])?></td>
                    <td><?php echo utf8_encode($row['valorTotal'])?></td>
                    <td><?php echo $row['formaPagamento']?></td>
                    <td><?php echo $row['endereco']?></td>
                    <td><?php echo $cliente?></td>
                    <td><a href="excluir-compra.php?id=<?php echo $row['id']?>" onclick="return confirm('Tem certeza?');"><img width="40px;" src="img/iconexcluir.png" class="iconop"></a></td>
                </tr>
                <?php
                    endwhile;
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
