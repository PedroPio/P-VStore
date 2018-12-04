<?php

	require "../../persistence/db.php";
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	
	include_once("../../model/cliente.php");
	include_once("../../persistence/conexao.php");
	include_once("../../persistence/clienteDAO.php");

	$conexao = new Conexao("localhost", "vinicius", "password", "pevstore");
	$conexao->conectar();
	$clientedao = new ClienteDAO();
	echo $_POST["codigo"];
	echo $_POST['cpf'];
	$consulta = $clientedao->consultar($_POST["codigo"], $_POST['cpf'], $conexao->getLink());
	$view = mysqli_fetch_row($consulta);
	
	echo '<div class="col-md-6 register-top-grid">';
	echo 	'<div>';
	echo 		'<span>Nome Completo</span>';
	echo 		'<input type="text" placeholder="'.$view['nome'].'" disabled>';
	echo 	'</div>';
	echo 	'<div>';
	echo 		'<span>Data de Nascimento</span>';
	echo 		'<input type="text" placeholder="'.$view['dataNascimento'].'" disabled>';
	echo 	'</div>';
	echo 	'<div>';
	echo 		'<span>CPF</span>';
	echo 		'<input type="text" placeholder="'.$view['cpf'].'" disabled>';
	echo 	'</div>';
	echo 	'<div>';
	echo 		'<span>Email</span>';
	echo 		'<input type="text" placeholder="'.$view['email'].'" disabled>';
	echo 	'</div>';
	echo 	'<div>';
	echo 		'<span>Senha</span>';
	echo 		'<input type="text" placeholder="'.$view['senha'].'" disabled>';
	echo 	'</div>';
	echo '</div>';
?>