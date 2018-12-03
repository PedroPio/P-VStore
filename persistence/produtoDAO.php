<?php
	include_once("../model/produto.php");

	class ProdutoDAO {
		function cadastrar($produto, $link) {
			$query = "INSERT INTO produtos (nome, marca, fornecedor, descricao, preco, quantidade) values ('".($produto->getNome())."','".($produto->getMarca())."','".($produto->getFornecedor())."',
				'".($produto->getDescricao())."','".($produto->getPreco())."','".($produto->getQuantidade())."')";

			if(!mysqli_query($link, $query)) {
				die("Erro ao tentar cadastrar produto!");
			}else{
				header("Location: ../../view/registerProducts.html");
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
		
		function montarCatalogo($link) {
			$query = mysqli_query($link, "SELECT * FROM produtos");
			$rows = mysqli_num_rows($query);
			if(!$query) {
				die("ERRO. NENHUM PRODUTO ENCONTRADO.");
			}

			for ($i=0; $i < $rows ; $i++) {
				$result = mysqli_fetch_array($query);
				echo '<div class="col-md-4">';
				echo 	'<div class="product-at">';
				echo 		'<a href="single.html">';
				echo 			'<img class="img-responsive" src="../images/pi3.jpg" alt="">';
				echo 			'<div class="pro-grid">';
				echo 				'<span class="buy-in">Comprar</span>';
				echo 			'</div>';
				echo 		'</a>';
				echo 	'</div>';
				echo 	'<div style="text-align: center; padding-top: 15px; padding-bottom: 15px"><b>'.$result['nome'].'</b></div>';
				echo 	'<a class="item_add" href="checkout.php?acao=add&idProduto='.$result['idProduto'].'"><p class="number item_price"><i> </i>R$ '.$result['preco'].'</p></a>';
				echo 	'<div style="padding-bottom: 70px"></div>';
				echo '</div>';
			}
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