<?php
	require "../../persistence/db.php";

    $query = mysqli_query($conexao->getLink(), "DELETE FROM Compra WHERE idCompra = '".$_POST['idCompra']."'");
    if (!$query){
    	die('NÃO FOI POSSÍVEL DELETAR A COMPRA!');
    }
    header('location:../../view/crudCompra.php')

?>