<?php

	include_once("../model/fornecedor.php");

	class FornecedorDAO {
		function cadastrar($fornecedor, $link) {
			/* conferir se o email ou cpf já foi cadastrado */
			$queryCNPJ = mysqli_query($link, "SELECT * FROM Fornecedor WHERE cnpjFornecedor= '".($fornecedor->getCnpjFornecedor())."'");
			$queryCNPJRows = mysqli_num_rows($queryCNPJ);
			
			if ($queryCNPJRows > "0") {
				die(header("Location: ../../view/createForncedor.php"));
			}

			$query = "INSERT INTO Fornecedor (cnpjFornecedor, nome) values ('".($fornecedor->getCnpjFornecedor())."',
                                    '".($fornecedor->getNome())."')";

			if(!mysqli_query($link, $query)) {
				die("Erro ao tentar se cadastrar!.");
			} else {
				header("Location: ../../view/crudFornec.php");
			}
        }
    }
		
		
?>