<?php
	class Cliente{
		var $codigo;
		var $nome;
		var $nascimento;
		var $cpf;
		var $email;
		var $cep;
		var $endereco;
		var $cidade;
		var $telefone;
		var $senha;
		
		function __construct($codigo, $nome, $nascimento, $cpf, $email,
							$cep, $endereco, $cidade, $telefone, $senha) {
			$this->codigo = $codigo;
			$this->nome = $nome;
			$this->nascimento = $nascimento;
			$this->cpf = $cpf;
			$this->email = $email;
			$this->cep = $cep;
			$this->endereco = $endereco;
			$this->cidade = $cidade;
			$this->telefone = $telefone;
			$this->senha = $senha;
		}
		
		function imprimir() {
			echo "Codigo: ".($this->codigo)."<br />Nome: ".($this->nome)."<br />Nascimento: ".($this->nascimento)."<br />Sal&aacute;rio: ".($this->salario)."<br />";
		}
		
		function getCodigo() {return $this->codigo;}
		function getNome() {return $this->nome;}
		function getNascimento() {return $this->nascimento;}
		function getCpf() {return $this->cpf;}
		function getEmail() {return $this->email;}
		function getCep() {return $this->cep;}
		function getEndereco() {return $this->endereco;}
		function getCidade() {return $this->cidade;}
		function getTelefone() {return $this->telefone;}
		function getSenha() {return $this->senha;}
		
		function setCodigo($codigo) {$this->codigo = $codigo;}
		function setNome($nome) {$this->nome = $nome;}
		function setNascimento($nascimento) {$this->nascimento = $nascimento;}
		function setCpf($nascimento) {$this->cpf = $cpf;}
		function setEmail($email) {$this->email = $email;}
		function setCep($cep) {$this->cep = $cep;}
		function setEndereco($endereco) {$this->endereco = $endereco;}
		function setCidade($cidade) {$this->cidade = $cidade;}
		function setTelefone($telefone) {$this->telefone = $telefone;}
		function setSenha($senha) {$this->senha = $senha;}
	}
?>