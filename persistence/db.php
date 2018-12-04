<?php
	include_once("conexao.php");

	$conexao = new Conexao("localhost", "vinicius", "password", "pevstore");
	$conexao->conectar();

?>