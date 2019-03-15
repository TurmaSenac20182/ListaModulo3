-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `mydb` ;

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`setor`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`setor` ;

CREATE TABLE IF NOT EXISTS `mydb`.`setor` (
  `codigo_setor` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`codigo_setor`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`funcao`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`funcao` ;

CREATE TABLE IF NOT EXISTS `mydb`.`funcao` (
  `codigo_funcao` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`codigo_funcao`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`turno`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`turno` ;

CREATE TABLE IF NOT EXISTS `mydb`.`turno`
 (
  `Codigo_turno` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  `Descricao` varchar(5) NOT NULL    
  )
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `mydb`.`Funcionario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`Funcionario` ;

CREATE TABLE IF NOT EXISTS `mydb`.`Funcionario` (
  `matricula` VARCHAR(6) NOT NULL,
  `login` VARCHAR(50) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  `nome` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `ramal` VARCHAR(6) NOT NULL,
  `FK_setor` INT UNSIGNED NOT NULL,
  `FK_funcao` INT UNSIGNED NOT NULL,
  `FK_turno` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`matricula`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
