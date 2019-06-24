<?php
    //trabalhando com sessões
    session_start();
    //limpar sessão
    session_unset();
    //destruir a sessão
    session_destroy();
    header('location:index.php');
?>
