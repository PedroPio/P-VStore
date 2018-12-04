SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

CREATE DATABASE IF NOT EXISTS `pevstore` DEFAULT CHARACTER SET utf8 ;
USE `pevstore` ;

CREATE TABLE IF NOT EXISTS `pevstore`.`Pessoa` (
  `cpf` VARCHAR(14) NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `dataNascimento` DATE NULL,
  `email` VARCHAR(200) NOT NULL,
  `eAdmin` TINYINT(1) NULL DEFAULT 0,
  `senha` VARCHAR(45) NOT NULL,
  `id` INT NOT NULL AUTO_INCREMENT,
  UNIQUE INDEX (`email`),
  PRIMARY KEY (`id`),
  UNIQUE INDEX (`cpf`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `pevstore`.`Transportadora` (
  `CNPJ` VARCHAR(14) NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `idTransportadora` INT NOT NULL AUTO_INCREMENT,
  UNIQUE INDEX (`CNPJ`),
  PRIMARY KEY (`idTransportadora`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `pevstore`.`Carrinho` (
  `idCarrinho` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idCarrinho`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `pevstore`.`Pedido` (
  `numPedido` VARCHAR(10) NOT NULL,
  `dataPedido` DATE NOT NULL,
  `Transportadora_CNPJ` VARCHAR(14) NOT NULL,
  `Carrinho_idCarrinho` INT NOT NULL,
  `Pessoa_id` INT NOT NULL,
  PRIMARY KEY (`numPedido`, `Transportadora_CNPJ`, `Carrinho_idCarrinho`, `Pessoa_id`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `pevstore`.`Pagamento` (
  `idPagamento` INT NOT NULL AUTO_INCREMENT,
  `tipoPagamento` VARCHAR(45) NOT NULL,
  `numParcelas` INT NOT NULL,
  `Pedido_numPedido` VARCHAR(10) NOT NULL,
  `Pedido_Pessoa_cpf` VARCHAR(14) NOT NULL,
  `Pedido_Transportadora_CNPJ` VARCHAR(14) NOT NULL,
  `Pedido_Carrinho_idCarrinho` INT NOT NULL,
  PRIMARY KEY (`idPagamento`, `Pedido_numPedido`, `Pedido_Pessoa_cpf`, `Pedido_Transportadora_CNPJ`, `Pedido_Carrinho_idCarrinho`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `pevstore`.`Fornecedor` (
  `cnpjFornecedor` VARCHAR(14) NOT NULL,
  `nome` VARCHAR(80) NOT NULL,
  `idFornecedor` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idFornecedor`),
  UNIQUE INDEX (`cnpjFornecedor`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `pevstore`.`Produto` (
  `codProduto` INT NOT NULL AUTO_INCREMENT,
  `precoCompra` DECIMAL(8,2) NULL,
  `precoVenda` DECIMAL(8,2) NULL,
  `Fornecedor_idFornecedor` INT NOT NULL,
  `qtd` INT NOT NULL,
  PRIMARY KEY (`codProduto`, `Fornecedor_idFornecedor`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `pevstore`.`Carrinho_has_Produto` (
  `Carrinho_idCarrinho` INT NOT NULL,
  `Produto_codProduto` INT NOT NULL,
  `Produto_Fornecedor_idFornecedor` INT NOT NULL,
  `qtd` INT NOT NULL,
  PRIMARY KEY (`Carrinho_idCarrinho`, `Produto_codProduto`, `Produto_Fornecedor_idFornecedor`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
