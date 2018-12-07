<?php

	include_once("../model/cliente.php");

	class ClienteDAO {
		function cadastrar($cliente, $link) {
			/* conferir se o email ou cpf já foi cadastrado */
			$queryCPF = mysqli_query($link, "SELECT * FROM Pessoa WHERE cpf= '".($cliente->getCpf())."'");
			$queryCPFRows = mysqli_num_rows($queryCPF);
			$queryEmail = mysqli_query($link, "SELECT * FROM Pessoa 
									 WHERE email= '".($cliente->getEmail())."'");
			$queryEmailRows = mysqli_num_rows($queryEmail);

			if ($queryCPFRows > "0") {
				die(header("Location: ../../view/register.php"));
			}
			if ($queryEmailRows > "0") {
				die(header("Location: ../../view/register.php"));
			}

			$query = "INSERT INTO Pessoa (nome, dataNascimento, cpf, email, senha) values ('".($cliente->getNome())."','".($cliente->getNascimento())."',
				'".($cliente->getCpf())."','".($cliente->getEmail())."','".($cliente->getSenha())."')";

			echo $query;
			if(!mysqli_query($link, $query)) {
				die("Erro ao tentar se cadastrar!.");
			} else {
				header("Location: ../../view/login.php");
			}
		}
		
		function excluir($cod, $cpf, $link) {
			if ($cod == ""){
				$query = "DELETE FROM Pessoa WHERE cpf = '".$cpf."'";
			}
			else{
				$query = "DELETE FROM Pessoa WHERE id = '".$cod."'";
			}
			if(!mysqli_query($link, $query)) {
				die("ERRO. CLIENTE NÃO EXCLUIDO.");
			}
			header("Location: ../../view/crudClientes.php");
		}
		
		function consultar($cod, $cpf, $link) {
			if ($cod == ""){
				$query = "SELECT * FROM Pessoa WHERE cpf= '".$cpf."'";
			}
			else{
				$query = "SELECT * FROM Pessoa WHERE id = '".$cod."'";
			}
			$consulta = mysqli_query($link, $query);
			if(!$consulta) {
				die("ERRO. CLIENTE NÃO ENCONTRADO.");
			}
			return $consulta;
		}
		
		
		
		function alterar($cliente, $link) {
			$query = "UPDATE Pessoa SET nome='".($cliente->getNome())."', dataNascimento='".($cliente->getNascimento())."',
			 cpf='".($cliente->getCpf())."', email='".($cliente->getEmail())."', senha='".($cliente->getSenha())."'
			 WHERE cpf ='".($cliente->getCpf())."'";
			echo $query;
			if(!mysqli_query($link, $query)) {
				die("ERRO! NAO SALVOU OS DADOS.");
			}
			header("Location: ../../view/editCliente.php");
		}
	}
?>