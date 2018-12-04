<?php
	require "../../persistence/db.php";

	include_once("../../persistence/conexao.php");
	include_once("../../persistence/produtoDAO.php")
	
	$clientedao = new ClienteDAO();
	$clientedao->excluir($_POST["codigo"], $conexao->getLink());
?>