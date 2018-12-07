<?php
	require "../../persistence/db.php";

	$delete = mysqli_query($conexao->getLink(), "SELECT idCompra FROM Compra WHERE idCompra = '".$_POST['compra']."'");
	$array = mysqli_fetch_array($delete);

    $query = mysqli_query($conexao->getLink(), "DELETE FROM Compra WHERE idCompra = '".$array['idCompra']."'");
    if (!$query){
    	die('NÃO FOI POSSÍVEL DELETAR A COMPRA!');
    }
    header('location:../../view/crudCompra.php')

?>