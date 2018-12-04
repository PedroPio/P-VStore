<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	require "../../persistence/db.php";
	

	include_once("../../model/fornecedor.php");
	include_once("../../persistence/conexao.php");
	include_once("../../persistence/fornecedorDAO.php");
	
	$fornecedor = new Fornecedor($_POST["cnpjFornecedor"], $_POST["nome"], null);
	
	$fornecedordao = new FornecedorDAO();
	$fornecedordao->cadastrar($fornecedor, $conexao->getLink());
?>