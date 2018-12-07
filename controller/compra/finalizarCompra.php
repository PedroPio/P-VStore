<?php
	session_start();
	if(isset($_SESSION['login'])){

		require "../../persistence/db.php";
		
		$transp = mysqli_query($conexao->getLink(), "SELECT idTransportadora FROM Transportadora
			WHERE idTransportadora = '".$_POST['transportadora']."'");
		$arrayTransp = mysqli_fetch_array($transp);

		$date = getdate();
		$dateFormat = $date['year'] . '-' . $date['mon'] . '-' . $date['mday'];

		$query = mysqli_query($conexao->getLink(), "INSERT INTO Compra (dataPedido, Pessoa_id, idTransportadora, codProduto) VALUES ('".$dateFormat."', '".$_SESSION['id']."', '".$arrayTransp['idTransportadora']."', '".$_POST['item']."')");

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
