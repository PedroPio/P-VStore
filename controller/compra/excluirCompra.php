<?php
	require "../../persistence/db.php";
    
    $query = "DELETE FROM Pessoa WHERE idCompra = '".$$_POST['idCompra']."'";

?>