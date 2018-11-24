<?php
	include_once("../../model/cliente.php");
	include_once("../../persistence/conexao.php");
	include_once("../../persistence/clienteDAO.php");
	
	$cliente = new Cliente(null, $_POST["nome"], $_POST["nascimento"], $_POST["cpf"],
						  $_POST["email"], $_POST["cep"], $_POST["endereco"], $_POST["cidade"],
						  $_POST["telefone"], $_POST["senha"]);
	
	$conexao = new Conexao("localhost","root","","pevstore");
	$conexao->conectar();
	
	$clientedao = new ClienteDAO();
	$clientedao->cadastrar($cliente, $conexao->getLink());
?>