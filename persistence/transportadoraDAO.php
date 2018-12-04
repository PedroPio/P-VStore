<?php
	include_once("../model/Cliente.php");

	class ClienteDAO {
		function cadastrar($cliente, $link) {
			$query = "INSERT INTO cliente (nome,nascimento,salario) values ('".($cliente->getNome())."','".($cliente->getNascimento())."',".($cliente->getSalario()).")";

			if(!mysqli_query($link, $query)) {die("ERRO! NÃO SALVOU OS DADOS.<br /><br /><a href=\"../view/excluirCliente.html\">VOLTAR</a>");}
			echo "DADOS SALVOS.";
		}
		
		function excluir($cod, $link) {
			$query = "DELETE FROM CLIENTE WHERE ID=".($cod);
			if(!mysqli_query($link, $query)) {
				die("ERRO. CLIENTE NÃO EXCLUIDO.<br /><br /><a href=\"../view/excluirCliente.html\">VOLTAR</a>");
			}
			echo "CLIENTE EXCLUIDO.";
		}
	}
?>