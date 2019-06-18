<?php
    echo "<meta charset='UTF-8'>";
    //conexão com o banco de dados
    $db_servidor ="localhost";
    $db_usuario ="root";
    $db_senha ="";
    $db_basedados = "groovecd";

    $conn = mysqli_connect($db_servidor,$db_usuario,$db_senha,$db_basedados);
    //testar conexão
    if (mysqli_connect_error()):
        echo "Falha na conexão: ".mysqli_connect_error();
    else:
        //echo "Conexão com sucesso";
    endif;
?>
