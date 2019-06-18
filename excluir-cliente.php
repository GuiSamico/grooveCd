<?php
	// Conectar o banco
	require_once 'conexao.php';
	// Recebi o id para a exclusão
	$id = $_GET['id'];
	mysqli_query($conn, "DELETE FROM cliente where id = $id");
	mysqli_query($conn);
	// Inserir Confirmação de Exclusão

	header('location:admin.php');

?>
