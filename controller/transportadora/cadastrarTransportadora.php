<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	require "../../persistence/db.php";
	

	include_once("../../model/transportadora.php");
	include_once("../../persistence/conexao.php");
	include_once("../../persistence/transportadoraDAO.php");
	
	$transportadora = new Transportadora(null, $_POST["cnpjTransportadora"], $_POST["nome"]);
	
	$transportadoradao = new TransportadoraDAO();
	$transportadoradao->cadastrar($transportadora, $conexao->getLink());
?>