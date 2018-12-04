<?php
	require "../../model/db.php";
	
	include_once("../persistence/Connection.php");
	include_once("../persistence/ClienteDAO.php");
	
	$conexao = new Connection("localhost","root","ph38671876","teste");
	$conexao->conectar();
	
	$clientedao = new ClienteDao();
	$clientedao->excluir($_POST["codigo"], $conexao->getLink());
?>