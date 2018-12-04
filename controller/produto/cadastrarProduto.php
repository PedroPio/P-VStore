<?php
	require "../../persistence/db.php";
	
	include_once("../../model/produto.php");
	include_once("../../persistence/conexao.php");
	include_once("../../persistence/produtoDAO.php");
	
	$produto = new Produto(null, $_POST["nome"],$_POST["precoCompra"], 
							$_POST["precoVenda"], $_POST["quantidade"], $_POST["idFornecedor"]);
	
	$produtodao = new ProdutoDAO();
	$produtodao->cadastrar($produto, $conexao->getLink());
?>