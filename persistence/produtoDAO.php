<?php
	include_once("../model/produto.php");

	class ProdutoDAO {
		function cadastrar($produto, $link) {
			$query = "INSERT INTO Produto (nome, fornecedor, precoCompra, precoVenda quantidade) values ('".($produto->getNome())."','".($produto->getFornecedor())."',
				'".($produto->getPrecoCompra())."','".($produto->getPrecoVenda())."','".($produto->getQuantidade())."')";

			if(!mysqli_query($link, $query)) {
				die("Erro ao tentar cadastrar produto!");
			}else{
				header("Location: ../../view/createProduto.php");
			}
		}
		
		function excluir($cod, $link) {
			$query = "DELETE FROM Produto WHERE codProduto = '".$cod."'";
			if(!mysqli_query($link, $query)) {
				die("ERRO. PRODUTO NÃO EXCLUIDO.");
			}
			header("Location: ../../view/deleteProduto.php");
		}
		
		function montarCatalogo($link) {
			$query = mysqli_query($link, "SELECT * FROM Produto");
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
		
	}
?>