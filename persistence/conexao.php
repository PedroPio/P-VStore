<?php
	class Conexao {
		var $servidor;
		var $user;
		var $password;
		var $bd;
		var $link;
		
		function __construct($servidor, $user, $pwd, $bd) {
			$this->servidor = $servidor;
			$this->user = $user;
			$this->password = $pwd;
			$this->bd = $bd;
		}
		
		function conectar() {
			if(!$this->link) {
				$this->link = mysqli_connect($this->servidor, $this->user, $this->password, $this->bd);
				if(!$this->link) {die("ERRO! Não Foi Possível conectar ao Banco de Dados do PeVStore.");}
			}
		}
		
		function fechar() {mysqli_close($this->link);}
		
		function getLink() {return $this->link;}
	}
?>