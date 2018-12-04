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
CREATE SCHEMA IF NOT EXISTS `pevstore` DEFAULT CHARACTER SET utf8 ;
USE `pevstore` ;

-- -----------------------------------------------------
-- Table `pevstore`.`Pessoa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pevstore`.`Pessoa` (
  `cpf` VARCHAR(14) NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `dataNascimento` VARCHAR(8) NULL,
  `email` VARCHAR(200) NOT NULL,
  `eAdmin` TINYINT(1) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  `id` INT NOT NULL AUTO_INCREMENT,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC),
  PRIMARY KEY (`id`),
  UNIQUE INDEX `cpf_UNIQUE` (`cpf` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pevstore`.`Transportadora`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pevstore`.`Transportadora` (
  `CNPJ` VARCHAR(14) NOT NULL,
  `nome` VARCHAR(45) NULL,
  PRIMARY KEY (`CNPJ`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pevstore`.`Carrinho`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pevstore`.`Carrinho` (
  `idCarrinho` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idCarrinho`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pevstore`.`Pedido`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pevstore`.`Pedido` (
  `numPedido` VARCHAR(10) NOT NULL,
  `dataPedido` DATE NOT NULL,
  `Transportadora_CNPJ` VARCHAR(14) NOT NULL,
  `Carrinho_idCarrinho` INT NOT NULL,
  `Pessoa_id` INT NOT NULL,
  PRIMARY KEY (`numPedido`, `Transportadora_CNPJ`, `Carrinho_idCarrinho`, `Pessoa_id`),
  CONSTRAINT `fk_Pedido_Transportadora1`
    FOREIGN KEY (`Transportadora_CNPJ`)
    REFERENCES `pevstore`.`Transportadora` (`CNPJ`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pedido_Carrinho1`
    FOREIGN KEY (`Carrinho_idCarrinho`)
    REFERENCES `pevstore`.`Carrinho` (`idCarrinho`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pedido_Pessoa1`
    FOREIGN KEY (`Pessoa_id`)
    REFERENCES `pevstore`.`Pessoa` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pevstore`.`Pagamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pevstore`.`Pagamento` (
  `idPagamento` INT NOT NULL AUTO_INCREMENT,
  `tipoPagamento` VARCHAR(45) NOT NULL,
  `numParcelas` INT NOT NULL,
  `Pedido_numPedido` VARCHAR(10) NOT NULL,
  `Pedido_Pessoa_cpf` VARCHAR(14) NOT NULL,
  `Pedido_Transportadora_CNPJ` VARCHAR(14) NOT NULL,
  `Pedido_Carrinho_idCarrinho` INT NOT NULL,
  PRIMARY KEY (`idPagamento`, `Pedido_numPedido`, `Pedido_Pessoa_cpf`, `Pedido_Transportadora_CNPJ`, `Pedido_Carrinho_idCarrinho`),
  CONSTRAINT `fk_Pagamento_Pedido1`
    FOREIGN KEY (`Pedido_numPedido` , `Pedido_Transportadora_CNPJ` , `Pedido_Carrinho_idCarrinho`)
    REFERENCES `pevstore`.`Pedido` (`numPedido` , `Transportadora_CNPJ` , `Carrinho_idCarrinho`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pevstore`.`Produto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pevstore`.`Produto` (
  `codProduto` INT NOT NULL AUTO_INCREMENT,
  `precoCompra` DECIMAL(8,2) NULL,
  `precoVenda` DECIMAL(8,2) NULL,
  `Pessoa_id` INT NOT NULL,
  PRIMARY KEY (`codProduto`),
  CONSTRAINT `fk_Produto_Pessoa1`
    FOREIGN KEY (`Pessoa_id`)
    REFERENCES `pevstore`.`Pessoa` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pevstore`.`Fornecedor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pevstore`.`Fornecedor` (
  `cnpjFornecedor` VARCHAR(14) NOT NULL,
  `nome` VARCHAR(80) NOT NULL,
  PRIMARY KEY (`cnpjFornecedor`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pevstore`.`Produto_has_Fornecedor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pevstore`.`Produto_has_Fornecedor` (
  `Produto_codProduto` INT NOT NULL,
  `Produto_Pessoa_cpf` VARCHAR(14) NOT NULL,
  `Fornecedor_cnpjFornecedor` VARCHAR(14) NOT NULL,
  PRIMARY KEY (`Produto_codProduto`, `Produto_Pessoa_cpf`, `Fornecedor_cnpjFornecedor`),
  CONSTRAINT `fk_Produto_has_Fornecedor_Produto1`
    FOREIGN KEY (`Produto_codProduto`)
    REFERENCES `pevstore`.`Produto` (`codProduto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Produto_has_Fornecedor_Fornecedor1`
    FOREIGN KEY (`Fornecedor_cnpjFornecedor`)
    REFERENCES `pevstore`.`Fornecedor` (`cnpjFornecedor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
