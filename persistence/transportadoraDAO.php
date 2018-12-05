<?php

	include_once("../model/transportadora.php");

	class TransportadoraDAO {
		function cadastrar($transportadora, $link) {
			/* conferir se o email ou cpf já foi cadastrado */
			$queryCNPJ = mysqli_query($link, "SELECT * FROM Transportadora WHERE cnpjTransportadora= '".($transportadora->getCnpjTransportadora())."'");
			$queryCNPJRows = mysqli_num_rows($queryCNPJ);

			if ($queryCNPJRows > "0") {
				die(header("Location: ../../view/createTransportadora.php"));
			}
			if ($queryEmailRows > "0") {
				die(header("Location: ../../view/createTransportadora.php"));
			}

			$query = "INSERT INTO Transportadora (cnpjTransportadora, nome) values ('".($transportadora->getCnpjTransportadora())."','".($transportadora->getNome())."')";

			echo $query;
			if(!mysqli_query($link, $query)) {
				die("Erro ao tentar se cadastrar!.");
			} else {
				header("Location: ../../view/crudTransportadora.php");
			}
        }
    }
		
		
?>