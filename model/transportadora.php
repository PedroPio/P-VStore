<?php
	class Transportadora{
		var $idTransportadora;
		var $cnpjTransportadora;
		var $nome;
		
		function __construct($idTransportadora, $cnpjTransportadora, $nome) {
			$this->idTransportadora = $idTransportadora;
			$this->cnpjTransportadora = $cnpjTransportadora;
			$this->nome = $nome;
		}
		
		
		function getIdTransportadora() {return $this->idTransportadora;}
		function getCnpjTransportadora() {return $this->cnpjTransportadora;}
		function getNome() {return $this->nome;}
		
		
        function setCnpjTransportadora($cnpjTransportadora) {$this->cnpjTransportadora = $cnpjTransportadora;}
        function setNome($nome) {$this->nome = $nome;}
		
		
	}
?>