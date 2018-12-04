<?php
	require "../../model/db.php";

	include_once("../model/Cliente.php");
	include_once("../persistence/Connection.php");
	include_once("../persistence/ClienteDAO.php");
	
	$cliente = new Cliente($_POST["codigo"], $_POST["nome"], $_POST["nascimento"], $_POST["salario"]);
	
	$conexao = new Connection("localhost","root","","teste");
	$conexao->conectar();
	
	$clientedao = new ClienteDao();
	$clientedao->alterar($cliente, $conexao->getLink());
?>