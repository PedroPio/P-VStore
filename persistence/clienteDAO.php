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
				header("Location: ../../view/pagInicial.php");
			}
		}
		
		function excluir($cod, $link) {
			$query = "DELETE FROM CLIENTE WHERE ID=".($cod);
			if(!mysqli_query($link, $query)) {
				die("ERRO. CLIENTE NÃO EXCLUIDO.<br /><br /><a href=\"../view/excluirCliente.html\">VOLTAR</a>");
			}
			echo "CLIENTE EXCLUIDO.<br /><br /><a href=\"../view/excluirCliente.html\">VOLTAR</a>";
		}
		
		function consultar($cod, $link) {
			$query = "SELECT * FROM CLIENTE WHERE ID=".($cod);
			$result = mysqli_query($link, $query);
			if(!$result) {
				die("ERRO. CLIENTE NÃO ENCONTRADO.<br /><br /><a href=\"../view/excluirCliente.html\">VOLTAR</a>");
			}
			return $result;
		}
		
		
		
		function alterar($cliente, $link) {
			$query = "update cliente set nome='".($cliente->getNome())."', nascimento='".($cliente->getNascimento())."', salario=".($cliente->getSalario())." WHERE ID=".$cliente->getCodigo();
			if(!mysqli_query($link, $query)) {
				die("ERRO! NAO SALVOU OS DADOS.<br /><br /><a href=\"../view/alterarCliente.html\">VOLTAR</a>");
			}
			echo "DADOS SALVOS.<br /><br /><a href=\"../view/alterarCliente.html\">VOLTAR</a>";
		}
	}
?>