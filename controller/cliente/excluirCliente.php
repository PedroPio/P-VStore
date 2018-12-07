<?php
	require "../../persistence/db.php";
	
	include_once("../../persistence/clienteDAO.php");

    $clientedao = new ClienteDAO();
	$clientedao->excluir($_POST['codigo'], $_POST['cpf'], $conexao->getLink());
?>