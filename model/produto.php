<?php
	class Produto{
		var $codigo;
		var $nome;
		var $fornecedor;
		var $precoCompra;
		var $precoVenda;
		var $quantidade;
		
		function __construct($codigo, $nome, $marca, $fornecedor, $descricao,
							$preco, $quantidade) {
			$this->codigo = $codigo;
			$this->nome = $nome;
			$this->fornecedor = $fornecedor;
			$this->precoCompra = $precoCompra;
			$this->precoVenda = $precoVenda;
			$this->quantidade = $quantidade;
		}
		
		function getCodigo() {return $this->codigo;}
		function getNome() {return $this->nome;}
		function getFornecedor() {return $this->fornecedor;}
		function getPrecoCompra() {return $this->precoCompra;}
		function getPrecoVenda() {return $this->precoVenda;}
		function getQuantidade() {return $this->quantidade;}
		
		function setCodigo($codigo) {$this->codigo = $codigo;}
		function setNome($nome) {$this->nome = $nome;}
		function setFornecedor($fornecedor) {$this->fornecedor = $fornecedor;}
		function setPreco($precoCompra) {$this->precoCompra = $precoCompra;}
		function setPreco($precoVenda) {$this->precoVenda = $precoVenda;}
		function setQuantidade($quantidade) {$this->quantidade = $quantidade;}
	}
?>
