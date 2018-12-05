<?php
	require "db.php";
	session_start();
	class CompraDAO {
		
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
			header("Location: ../../view/deleteCliente.php");
		}
		
		function consultar($id, $link) {

			$consulta = mysqli_query($link, $query);
			if(!$consulta) {
				die("ERRO. CLIENTE NÃO ENCONTRADO.");
			}
			return $consulta;
		}
		
		function alterar($compraID, $compraData, $compraNomePessoa, $link) {
			$query = "UPDATE Compra SET nome='".($compraNomePessoa)."', dataPedido='".($compraData)."',
			 idCompra='".($compraID)."', email='".($cliente->getEmail())."', senha='".($cliente->getSenha())."'
			 WHERE cpf ='".($cliente->getCpf())."'";
			echo $query;
			if(!mysqli_query($link, $query)) {
				die("ERRO! NAO SALVOU OS DADOS.");
			}
			header("Location: ../../view/editCliente.php");
		}
	}
?>