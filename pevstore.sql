SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

CREATE SCHEMA IF NOT EXISTS `pevstore` DEFAULT CHARACTER SET utf8 ;
USE `pevstore` ;

CREATE TABLE IF NOT EXISTS `pevstore`.`Pessoa` (
  `cpf` VARCHAR(14) NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `dataNascimento` DATE NULL,
  `email` VARCHAR(200) NOT NULL,
  `eAdmin` TINYINT(1) NULL DEFAULT 0,
  `senha` VARCHAR(45) NOT NULL,
  `id` INT NOT NULL AUTO_INCREMENT,
  UNIQUE INDEX (`email`) ,
  PRIMARY KEY (`id`),
  UNIQUE INDEX (`cpf`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `pevstore`.`Compra` (
  `idCarrinho` VARCHAR(10) NOT NULL,
  `dataPedido` DATE NOT NULL,
  `Pessoa_id` INT NOT NULL,
  PRIMARY KEY (`idCarrinho`, `Pessoa_id`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `pevstore`.`Fornecedor` (
  `cnpjFornecedor` VARCHAR(14) NOT NULL,
  `nome` VARCHAR(80) NOT NULL,
  `idFornecedor` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idFornecedor`),
  UNIQUE INDEX  (`cnpjFornecedor`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `pevstore`.`Produto` (
  `nome` VARCHAR(45) NOT NULL,
  `codProduto` INT NOT NULL AUTO_INCREMENT,
  `precoCompra` DECIMAL(8,2) NULL,
  `precoVenda` DECIMAL(8,2) NULL,
  `Fornecedor_idFornecedor` INT NOT NULL,
  `qtd` INT NOT NULL,
  PRIMARY KEY (`codProduto`, `Fornecedor_idFornecedor`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `pevstore`.`Carrinho` (
  `Produto_codProduto` INT NOT NULL,
  `Produto_Fornecedor_idFornecedor` INT NOT NULL,
  `Carrinho_idCarrinho` VARCHAR(10) NOT NULL,
  `Carrinho_Pessoa_id` INT NOT NULL,
  `qtd` INT NOT NULL,
  PRIMARY KEY (`Produto_codProduto`, `Produto_Fornecedor_idFornecedor`, `Carrinho_idCarrinho`, `Carrinho_Pessoa_id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
