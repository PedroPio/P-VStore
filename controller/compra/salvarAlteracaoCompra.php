<?php
	require "../../persistence/db.php";
	
	include_once("../../persistence/conexao.php");
	include_once("../../persistence/compraDAO.php");
	
    $compraID = $_POST['idCompra'];
    $compraData = $_POST['dataPedido'];
    $compraNomePessoa = $_POST['nome'];
    $compraIDTransportadora = $_POST['idTransportadora'];
	
	$compradao = new CompraDAO();
	$clientedao->alterar($compraID, $compraData, $compraNomePessoa, $conexao->getLink());
?>