-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema carrinhoCompras
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema carrinhoCompras
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `carrinhoCompras` DEFAULT CHARACTER SET utf8 ;
USE `carrinhoCompras` ;

-- -----------------------------------------------------
-- Table `carrinhoCompras`.`produto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `carrinhoCompras`.`produto` (
  `idproduto` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `descricao` VARCHAR(100) NULL,
  `valor` FLOAT NOT NULL,
  `imagem` INT NULL,
  PRIMARY KEY (`idproduto`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `carrinhoCompras`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `carrinhoCompras`.`cliente` (
  `cpf` VARCHAR(30) NOT NULL,
  `nome` VARCHAR(100) NOT NULL,
  `dataNascimento` VARCHAR(10) NULL,
  `email` VARCHAR(100) NOT NULL,
  `senha` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`cpf`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC))
ENGINE = InnoDB;





-- -----------------------------------------------------
-- Table `carrinhoCompras`.`carrinho`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `carrinhoCompras`.`carrinho` (
  `idcarrinho` INT NOT NULL AUTO_INCREMENT,
  `cliente_cpf` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`idcarrinho`, `cliente_cpf`),
  INDEX `fk_carrinho_cliente1_idx` (`cliente_cpf` ASC),
  CONSTRAINT `fk_carrinho_cliente1`
    FOREIGN KEY (`cliente_cpf`)
    REFERENCES `carrinhoCompras`.`cliente` (`cpf`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `carrinhoCompras`.`carrinho_has_produto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `carrinhoCompras`.`carrinho_has_produto` (
  `carrinho_idcarrinho` INT NOT NULL,
  `produto_idproduto` INT NOT NULL,
  `quantidade` INT NOT NULL,
  PRIMARY KEY (`carrinho_idcarrinho`, `produto_idproduto`),
  INDEX `fk_carrinho_has_produto_produto1_idx` (`produto_idproduto` ASC),
  INDEX `fk_carrinho_has_produto_carrinho1_idx` (`carrinho_idcarrinho` ASC),
  CONSTRAINT `fk_carrinho_has_produto_carrinho1`
    FOREIGN KEY (`carrinho_idcarrinho`)
    REFERENCES `carrinhoCompras`.`carrinho` (`idcarrinho`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_carrinho_has_produto_produto1`
    FOREIGN KEY (`produto_idproduto`)
    REFERENCES `carrinhoCompras`.`produto` (`idproduto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `carrinhoCompras`.`finalizaCompra`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `carrinhoCompras`.`finalizaCompra` (
  `idfinalizaCompra` INT NOT NULL AUTO_INCREMENT,
  `carrinho_idcarrinho` INT NOT NULL,
  `status` ENUM('AB', 'CL') NOT NULL,

  PRIMARY KEY (`idfinalizaCompra`, `carrinho_idcarrinho`),
  INDEX `fk_confirmaCompra_carrinho1_idx` (`carrinho_idcarrinho` ASC),
  CONSTRAINT `fk_confirmaCompra_carrinho1`
    FOREIGN KEY (`carrinho_idcarrinho`)
    REFERENCES `carrinhoCompras`.`carrinho` (`idcarrinho`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
  
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `carrinhoCompras`.`pedidoConcluido`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `carrinhoCompras`.`pedidoConcluido` (
  `idpedidoConcluido` INT NOT NULL AUTO_INCREMENT,
  `cliente_cpf` VARCHAR(30) NOT NULL,
  `nomeProduto` VARCHAR(45) NOT NULL,
  `valorProduto` FLOAT NOT NULL,
  `imagemProduto` INT NOT NULL,
  `qtdProduto` INT NOT NULL,
  PRIMARY KEY (`idpedidoConcluido`, `cliente_cpf`),
  INDEX `fk_pedidoConcluido_cliente1_idx` (`cliente_cpf` ASC),
  CONSTRAINT `fk_pedidoConcluido_cliente1`
    FOREIGN KEY (`cliente_cpf`)
    REFERENCES `carrinhoCompras`.`cliente` (`cpf`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

insert into produto (nome, descricao, valor, imagem) values ('Camisa Branca Aesthetic', 'Camisa algodao, branca lisa', 56.90, 14);
insert into produto (nome, descricao, valor, imagem) values ('Palito', 'Conjunto Terno + Calca', 250.90, 17);
insert into produto (nome, descricao, valor, imagem) values ('Conjunto Yellow', 'Moletom e calça algodao', 346.90, 16);
insert into produto (nome, descricao, valor, imagem) values ('Colegial 2000', 'Blusa rose + Saia Xadrez', 146.90, 13);
insert into produto (nome, descricao, valor, imagem) values ('Gotic', 'Blusa + Colete + Calça', 223.90, 21);
insert into produto (nome, descricao, valor, imagem) values ('Vestido Azul Floral', 'Vestido social', 88.90, 23);
insert into produto (nome, descricao, valor, imagem) values ('Moletom Preto Feminino', '', 59.90, 2);
insert into produto (nome, descricao, valor, imagem) values ('Lunk Social', '', 69.50, 24);
insert into produto (nome, descricao, valor, imagem) values ('Blusinha Talk', '', 22.90, 29);
insert into produto (nome, descricao, valor, imagem) values ('Short Lok', '', 15.90, 18);
insert into produto (nome, descricao, valor, imagem) values ('Blusão', '', 24.90, 22);
insert into produto (nome, descricao, valor, imagem) values ('Tenis Nike Branco', '', 150.00, 11);
insert into produto (nome, descricao, valor, imagem) values ('Vestido Branco', '', 99.90, 10);



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;