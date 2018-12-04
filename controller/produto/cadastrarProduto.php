<?php
	require "../../model/db.php";
	
	include_once("../../model/produto.php");
	include_once("../../persistence/conexao.php");
	include_once("../../persistence/produtoDAO.php");
	
	$produto = new Produto(null, $_POST["nome"], $_POST["marca"], 
						   $_POST["fornecedor"], $_POST["descricao"],
						   $_POST["preco"], $_POST["quantidade"]);
	
	$conexao = new Conexao("localhost","root","","pevstore");
	$conexao->conectar();

	$produtodao = new ProdutoDAO();
	$produtodao->cadastrar($produto, $conexao->getLink());
?>