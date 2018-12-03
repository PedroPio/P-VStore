<?php
	include_once("../persistence/Connection.php");
	include_once("../persistence/ClienteDAO.php");
	
	$conexao = new Connection("localhost","root","","teste");
	$conexao->conectar();
	
	$clientedao = new ClienteDao();
	$clientedao->excluir($_POST["codigo"], $conexao->getLink());
?>