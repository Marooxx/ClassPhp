-- MySQL Script generated by MySQL Workbench
-- Tue May 30 11:37:02 2017
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`categorie`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`categorie` (
  `idcategorie` INT(5) NOT NULL AUTO_INCREMENT,
  `label` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idcategorie`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`departement`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`departement` (
  `iddepartement` INT NOT NULL AUTO_INCREMENT,
  `label` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`iddepartement`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`fonction`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`fonction` (
  `idfonction` INT NOT NULL AUTO_INCREMENT,
  `label` VARCHAR(45) NOT NULL,
  `departement_iddepartement` INT NOT NULL,
  PRIMARY KEY (`idfonction`),
  INDEX `fk_fonction_departement1_idx` (`departement_iddepartement` ASC),
  CONSTRAINT `fk_fonction_departement1`
    FOREIGN KEY (`departement_iddepartement`)
    REFERENCES `mydb`.`departement` (`iddepartement`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`employes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`employes` (
  `idemployes` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(45) NOT NULL,
  `prenom` VARCHAR(45) NOT NULL,
  `adresse` VARCHAR(255) NULL,
  `date_naissance` DATE NOT NULL,
  `categorie_idcategorie` INT(5) NOT NULL,
  `fonction_idfonction` INT NOT NULL,
  PRIMARY KEY (`idemployes`),
  INDEX `fk_employes_categorie_idx` (`categorie_idcategorie` ASC),
  INDEX `fk_employes_fonction1_idx` (`fonction_idfonction` ASC),
  CONSTRAINT `fk_employes_categorie`
    FOREIGN KEY (`categorie_idcategorie`)
    REFERENCES `mydb`.`categorie` (`idcategorie`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_employes_fonction1`
    FOREIGN KEY (`fonction_idfonction`)
    REFERENCES `mydb`.`fonction` (`idfonction`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`echelon`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`echelon` (
  `idechelon` INT NOT NULL AUTO_INCREMENT,
  `label` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idechelon`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`categorie_has_echelon`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`categorie_has_echelon` (
  `categorie_idcategorie` INT(5) NOT NULL,
  `echelon_idechelon` INT NOT NULL,
  PRIMARY KEY (`categorie_idcategorie`, `echelon_idechelon`),
  INDEX `fk_categorie_has_echelon_echelon1_idx` (`echelon_idechelon` ASC),
  INDEX `fk_categorie_has_echelon_categorie1_idx` (`categorie_idcategorie` ASC),
  CONSTRAINT `fk_categorie_has_echelon_categorie1`
    FOREIGN KEY (`categorie_idcategorie`)
    REFERENCES `mydb`.`categorie` (`idcategorie`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_categorie_has_echelon_echelon1`
    FOREIGN KEY (`echelon_idechelon`)
    REFERENCES `mydb`.`echelon` (`idechelon`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
