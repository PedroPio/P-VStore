<?php
	class Cliente{
		var $codigo;
		var $nome;
		var $nascimento;
		var $cpf;
		var $email;
		var $senha;
		var $eAdmin;
		
		function __construct($codigo, $nome, $nascimento, $cpf, $email, $senha, $eAdmin = 0) {
			$this->codigo = $codigo;
			$this->nome = $nome;
			$this->nascimento = $nascimento;
			$this->cpf = $cpf;
			$this->email = $email;
			$this->eAdmin = $eAdmin;
			$this->senha = $senha ;
		}
		
		
		function getCodigo() {return $this->codigo;}
		function getNome() {return $this->nome;}
		function getNascimento() {return $this->nascimento;}
		function getCpf() {return $this->cpf;}
		function getEmail() {return $this->email;}
		function getSenha() {return $this->senha;}
		
		function setCodigo($codigo) {$this->codigo = $codigo;}
		function setNome($nome) {$this->nome = $nome;}
		function setNascimento($nascimento) {$this->nascimento = $nascimento;}
		function setCpf($nascimento) {$this->cpf = $cpf;}
		function setEmail($email) {$this->email = $email;}
		function setSenha($senha) {$this->senha = $senha;}
	}
?>