<?php
	require "../../persistence/db.php";

	$consulta = mysqli_query($conexao->getLink(), "SELECT id FROM Pessoa WHERE
				nome = '".$_POST['nome']."'");
	$array = mysqli_fetch_array($consulta);

	$query = "UPDATE Compra SET dataPedido='".($_POST['dataPedido'])."',
			Pessoa_id='".($array['id'])."', 
			idTransportadora='".($_POST['idTransportadora'])."',
			codProduto='".($_POST['codProduto'])."' WHERE idCompra = 
			'".$_POST['idCompra']."'";
	if(!mysqli_query($conexao->getLink(), $query)) {
		die("ERRO! NAO SALVOU OS DADOS.");
	}
	header('location:../../view/crudCompra.php')
?>