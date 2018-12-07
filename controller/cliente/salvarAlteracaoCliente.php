<?php
	require "../../persistence/db.php";
	
	include_once("../../model/cliente.php");
	include_once("../../persistence/clienteDAO.php");
	
	$cliente = new Cliente(null, $_POST["nome"], $_POST["nascimento"], $_POST["cpf"],
	$_POST["email"], $_POST["senha"]);
	
	$clientedao = new ClienteDAO();
	$clientedao->alterar($cliente, $conexao->getLink());
?>