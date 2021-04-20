-- -----------------------------------------------------
-- Schema phpoo
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `phpoo` ;

-- -----------------------------------------------------
-- Schema phpoo
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `phpoo` DEFAULT CHARACTER SET utf8 ;
USE `phpoo` ;

-- -----------------------------------------------------
-- Table `phpoo`.`tipo_pessoa`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `phpoo`.`tipo_pessoa` ;

CREATE TABLE IF NOT EXISTS `phpoo`.`tipo_pessoa` (
  `id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL
)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `phpoo`.`pessoas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `phpoo`.`pessoas` ;

CREATE TABLE IF NOT EXISTS `phpoo`.`pessoas` (
  `id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `telefone` VARCHAR(11) NULL,
  `email` VARCHAR(255) NULL,
  `documento` VARCHAR(255) NOT NULL,
  `id_tipo_pessoa` INT NOT NULL,
  CONSTRAINT `fk_pessoas_tipo_pessoa1`
    FOREIGN KEY (`id_tipo_pessoa`)
    REFERENCES `phpoo`.`tipo_pessoa` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `phpoo`.`paises`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `phpoo`.`paises` ;

CREATE TABLE IF NOT EXISTS `phpoo`.`paises` (
  `id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `sigla` VARCHAR(3) NOT NULL,
  `ddi` VARCHAR(2) NULL
)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `phpoo`.`estados`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `phpoo`.`estados` ;

CREATE TABLE IF NOT EXISTS `phpoo`.`estados` (
  `id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `sigla` VARCHAR(3) NOT NULL,
  `id_pais` INT NOT NULL,
  CONSTRAINT `fk_estados_paises`
    FOREIGN KEY (`id_pais`)
    REFERENCES `phpoo`.`paises` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `phpoo`.`cidades`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `phpoo`.`cidades` ;

CREATE TABLE IF NOT EXISTS `phpoo`.`cidades` (
  `id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `id_estado` INT NOT NULL,
  CONSTRAINT `fk_cidades_estados1`
    FOREIGN KEY (`id_estado`)
    REFERENCES `phpoo`.`estados` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `phpoo`.`endereco_pessoa`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `phpoo`.`endereco_pessoa` ;

CREATE TABLE IF NOT EXISTS `phpoo`.`endereco_pessoa` (
  `id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `endereco` VARCHAR(500) NOT NULL,
  `id_cidade` INT NOT NULL,
  `telefone` VARCHAR(11) NULL,
  `pessoas_id` INT NOT NULL,
  CONSTRAINT `fk_endereco_pessoa_cidades1`
    FOREIGN KEY (`id_cidade`)
    REFERENCES `phpoo`.`cidades` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_endereco_pessoa_pessoas1`
    FOREIGN KEY (`pessoas_id`)
    REFERENCES `phpoo`.`pessoas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;
