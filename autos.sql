-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema autos_crud
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema autos_crud
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `autos_crud` DEFAULT CHARACTER SET utf8 ;
USE `autos_crud` ;

-- -----------------------------------------------------
-- Table `autos_crud`.`vendedores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `autos_crud`.`vendedores` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `apellido` VARCHAR(45) NULL,
  `telefono` VARCHAR(10) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `autos_crud`.`autos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `autos_crud`.`autos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(45) NULL,
  `precio` DECIMAL(10,2) NULL,
  `imagen` VARCHAR(200) NULL,
  `descripcion` LONGTEXT NULL,
  `puertas` INT(1) NULL,
  `marca` VARCHAR(45) NULL,
  `modelo` VARCHAR(45) NULL,
  `creado` DATE NULL,
  `vendedores_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_autos_vendedores_idx` (`vendedores_id` ASC) VISIBLE,
  CONSTRAINT `fk_autos_vendedores`
    FOREIGN KEY (`vendedores_id`)
    REFERENCES `autos_crud`.`vendedores` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `autos_crud`.`vendedores`
-- -----------------------------------------------------
START TRANSACTION;
USE `autos_crud`;
INSERT INTO `autos_crud`.`vendedores` (`id`, `nombre`, `apellido`, `telefono`) VALUES (1, 'Angel', 'Martinez', '4772847161');
INSERT INTO `autos_crud`.`vendedores` (`id`, `nombre`, `apellido`, `telefono`) VALUES (2, 'Noe', 'Diaz', '4771769473');

COMMIT;

