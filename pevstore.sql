-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema pevstore
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema pevstore
-- -----------------------------------------------------
CREATE DATABASE IF NOT EXISTS `pevstore` DEFAULT CHARACTER SET utf8 ;
USE `pevstore` ;

-- -----------------------------------------------------
-- Table `pevstore`.`Pessoa`
-- -----------------------------------------------------
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


-- -----------------------------------------------------
-- Table `pevstore`.`Transportadora`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pevstore`.`Transportadora` (
  `idTransportadora` INT NOT NULL AUTO_INCREMENT,
  `cnpjTransportadora` VARCHAR(45) NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idTransportadora`),
  UNIQUE INDEX  (`cnpjTransportadora`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pevstore`.`Fornecedor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pevstore`.`Fornecedor` (
  `cnpjFornecedor` VARCHAR(14) NOT NULL,
  `nome` VARCHAR(80) NOT NULL,
  `idFornecedor` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idFornecedor`),
  UNIQUE INDEX (`cnpjFornecedor`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pevstore`.`Produto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pevstore`.`Produto` (
  `codProduto` INT NOT NULL AUTO_INCREMENT,
  `precoCompra` DECIMAL(8,2) NULL,
  `precoVenda` DECIMAL(8,2) NULL,
  `idFornecedor` INT NOT NULL,
  `qtd` INT NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`codProduto`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pevstore`.`Compra`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pevstore`.`Compra` (
  `idCompra` INT NOT NULL AUTO_INCREMENT,
  `dataPedido` DATE NOT NULL,
  `Pessoa_id` INT NOT NULL,
  `idTransportadora` INT NOT NULL,
  `codProduto` INT NOT NULL,
  PRIMARY KEY (`idCompra`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
