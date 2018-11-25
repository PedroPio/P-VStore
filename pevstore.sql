SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

CREATE SCHEMA IF NOT EXISTS `pevstore` DEFAULT CHARACTER SET utf8 ;
USE `pevstore` ;

CREATE TABLE IF NOT EXISTS `pevstore`.`clientes` (
  `idCliente` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `nascimento` DATE NOT NULL,
  `cpf` VARCHAR(14) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `cep` VARCHAR(9) NOT NULL,
  `endereco` VARCHAR(100) NOT NULL,
  `cidade` VARCHAR(45) NOT NULL,
  `telefone` VARCHAR(14) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idCliente`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `pevstore`.`produtos` (
  `idProduto` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `marca` VARCHAR(45) NOT NULL,
  `fornecedor` VARCHAR(45) NOT NULL,
  `descricao` VARCHAR(100) NOT NULL,
  `preco` DECIMAL(8,2) NOT NULL,
  `quantidade` INT NOT NULL,
  PRIMARY KEY (`idProduto`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `pevstore`.`transportadora` (
  `idTransportadora` INT NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `cnpj` VARCHAR(18) NOT NULL,
  PRIMARY KEY (`idTransportadora`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `pevstore`.`compras` (
  `produtos_idProduto` INT NOT NULL,
  `clientes_idCliente` INT NOT NULL,
  `transportadora_idTransportadora` INT NOT NULL,
  `protocolo` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`protocolo`),
  CONSTRAINT `fk_compras_produtos`
    FOREIGN KEY (`produtos_idProduto`)
    REFERENCES `pevstore`.`produtos` (`idProduto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_compras_clientes1`
    FOREIGN KEY (`clientes_idCliente`)
    REFERENCES `pevstore`.`clientes` (`idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_compras_transportadora1`
    FOREIGN KEY (`transportadora_idTransportadora`)
    REFERENCES `pevstore`.`transportadora` (`idTransportadora`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
