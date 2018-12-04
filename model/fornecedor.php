<?php
	class Fornecedor{
		var $cnpjFornecedor;
		var $nome;
		var $idFornecedor;
		
		function __construct($cnpjFornecedor, $nome, $idFornecedor) {
			$this->cnpjFornecedor = $cnpjFornecedor;
			$this->nome = $nome;
			$this->idFornecedor = $idFornecedor;
		}
		
		
		function getCnpjFornecedor() {return $this->cnpjFornecedor;}
        function getNome() {return $this->nome;}
        function getIdFornecedor(){return $this->idFornecedor;}
		
		function setCnpjFornecedor($cnpjFornecedor) {$this->cnpjFornecedor = $cnpjFornecedor;}
		function setNome($nome) {$this->nome = $nome;}
	}
?>