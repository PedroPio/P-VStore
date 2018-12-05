<?php
	session_start();
	if(isset($_SESSION['login'])){

		require "../../persistence/db.php";

		$query = mysqli_query($conexao->getLink(), "INSERT INTO Compra (dataPedido, Pessoa_id, idTransportadora, codProduto) VALUES ('2018-12-04', '".$_SESSION['id']."', '".$_POST['transportadora']."', '".$_POST['item']."')");

		if(!$query){
			die("ERRO AO FINALIZAR COMPRA!");
		}
		else{
			$query = mysqli_query($conexao->getLink(),"DELETE FROM Carrinho");
			header('location:../../view/pagInicial.php');
		}
	}
	else{
		header('location:../../view/login.php');
	}
?>
