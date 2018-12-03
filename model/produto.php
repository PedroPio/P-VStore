<?php
	class Produto{
		var $codigo;
		var $nome;
		var $marca;
		var $fornecedor;
		var $descricao;
		var $preco;
		var $quantidade;
		
		function __construct($codigo, $nome, $marca, $fornecedor, $descricao,
							$preco, $quantidade) {
			$this->codigo = $codigo;
			$this->nome = $nome;
			$this->marca = $marca;
			$this->fornecedor = $fornecedor;
			$this->descricao = $descricao;
			$this->preco = $preco;
			$this->quantidade = $quantidade;
		}

		function imprimir() {
			echo "Codigo: ".($this->preco)."<br />Nome: ".($this->nome)."<br />Nascimento: ".($this->nascimento)."<br />Sal&aacute;rio: ".($this->salario)."<br />";
		}
		
		function getCodigo() {return $this->codigo;}
		function getNome() {return $this->nome;}
		function getMarca() {return $this->marca;}
		function getFornecedor() {return $this->fornecedor;}
		function getDescricao() {return $this->descricao;}
		function getPreco() {return $this->preco;}
		function getQuantidade() {return $this->quantidade;}
		
		function setCodigo($codigo) {$this->codigo = $codigo;}
		function setNome($nome) {$this->nome = $nome;}
		function setMarca($marca) {$this->marca = $marca;}
		function setFornecedor($fornecedor) {$this->fornecedor = $fornecedor;}
		function setDescricao($descricao) {$this->descricao = $descricao;}
		function setPreco($preco) {$this->preco = $preco;}
		function setQuantidade($quantidade) {$this->quantidade = $quantidade;}
	}
?>