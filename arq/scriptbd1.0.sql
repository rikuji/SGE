-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema sge
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema sge
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `sge` DEFAULT CHARACTER SET utf8 ;
USE `sge` ;

-- -----------------------------------------------------
-- Table `sge`.`Disciplina`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sge`.`Disciplina` (
  `idDisciplina` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`idDisciplina`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sge`.`tipoUsuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sge`.`tipoUsuario` (
  `idtipoUsuario` INT UNSIGNED NOT NULL,
  `perfil` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idtipoUsuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sge`.`Professor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sge`.`Professor` (
  `idProfessor` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `Registro` VARCHAR(45) NOT NULL,
  `idDisciplina` INT UNSIGNED NOT NULL,
  `idTipoUsuario` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idProfessor`),
  INDEX `fk_Professor_Disciplina1_idx` (`idDisciplina` ASC),
  INDEX `fk_Professor_tipoUsuario1_idx` (`idTipoUsuario` ASC),
  CONSTRAINT `fk_Professor_Disciplina1`
    FOREIGN KEY (`idDisciplina`)
    REFERENCES `sge`.`Disciplina` (`idDisciplina`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Professor_tipoUsuario1`
    FOREIGN KEY (`idTipoUsuario`)
    REFERENCES `sge`.`tipoUsuario` (`idtipoUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sge`.`Turma`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sge`.`Turma` (
  `idTurma` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(45) NOT NULL,
  `periodo` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`idTurma`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sge`.`responsavel`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sge`.`responsavel` (
  `idRespLegal` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `cpf` BIGINT(11) ZEROFILL NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `celullar` BIGINT(13) NULL,
  `telFixo` INT(12) NULL,
  `dtNasc` DATE NOT NULL,
  `sexo` ENUM('M', 'F') NOT NULL,
  `logradouro` VARCHAR(100) NOT NULL,
  `complemento` VARCHAR(100) NULL,
  `bairro` VARCHAR(50) NOT NULL,
  `cidade` VARCHAR(50) NOT NULL,
  `uf` CHAR(2) NOT NULL,
  `cep` INT(8) NOT NULL,
  `numero` INT(6) ZEROFILL NOT NULL,
  `estadoCivil` VARCHAR(20) NOT NULL,
  `legal` ENUM('S', 'N') NULL,
  `financeiro` ENUM('S', 'N') NULL,
  `idTipoUsuario` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idRespLegal`),
  UNIQUE INDEX `cpf_UNIQUE` (`cpf` ASC),
  INDEX `fk_responsavelLegal_tipoUsuario1_idx` (`idTipoUsuario` ASC),
  CONSTRAINT `fk_responsavelLegal_tipoUsuario1`
    FOREIGN KEY (`idTipoUsuario`)
    REFERENCES `sge`.`tipoUsuario` (`idtipoUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sge`.`Aluno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sge`.`Aluno` (
  `idAluno` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `cpf` BIGINT(11) ZEROFILL NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `celullar` BIGINT(13) NULL,
  `telFixo` INT(12) NULL,
  `dtNasc` DATE NOT NULL,
  `sexo` ENUM('M', 'F') NOT NULL,
  `logradouro` VARCHAR(100) NOT NULL,
  `complemento` VARCHAR(100) NULL,
  `bairro` VARCHAR(50) NOT NULL,
  `cidade` VARCHAR(50) NOT NULL,
  `uf` CHAR(2) NOT NULL,
  `cep` INT(8) NOT NULL,
  `numero` INT(6) ZEROFILL NOT NULL,
  `senha` VARCHAR(35) NOT NULL,
  `idTipoUsuario` INT UNSIGNED NOT NULL,
  `idResponsavel` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idAluno`),
  UNIQUE INDEX `cpf_UNIQUE` (`cpf` ASC),
  INDEX `fk_Aluno_tipoUsuario1_idx` (`idTipoUsuario` ASC),
  INDEX `fk_Aluno_responsavelLegal1_idx` (`idResponsavel` ASC),
  CONSTRAINT `fk_Aluno_tipoUsuario1`
    FOREIGN KEY (`idTipoUsuario`)
    REFERENCES `sge`.`tipoUsuario` (`idtipoUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Aluno_responsavelLegal1`
    FOREIGN KEY (`idResponsavel`)
    REFERENCES `sge`.`responsavel` (`idRespLegal`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sge`.`Secretaria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sge`.`Secretaria` (
  `idSecretaria` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `cpf` BIGINT(11) ZEROFILL NOT NULL,
  `senha` VARCHAR(35) NOT NULL,
  `cargo` VARCHAR(15) NOT NULL,
  `idTipoUsuario` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idSecretaria`),
  UNIQUE INDEX `cpf_UNIQUE` (`cpf` ASC),
  INDEX `fk_Secretaria_tipoUsuario1_idx` (`idTipoUsuario` ASC),
  CONSTRAINT `fk_Secretaria_tipoUsuario1`
    FOREIGN KEY (`idTipoUsuario`)
    REFERENCES `sge`.`tipoUsuario` (`idtipoUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sge`.`TurmaDisciplina`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sge`.`TurmaDisciplina` (
  `idTurma` INT UNSIGNED NOT NULL,
  `idDisciplina` INT UNSIGNED NOT NULL,
  INDEX `fk_TurmaDisciplina_Turma1_idx` (`idTurma` ASC),
  INDEX `fk_TurmaDisciplina_Disciplina1_idx` (`idDisciplina` ASC),
  CONSTRAINT `fk_TurmaDisciplina_Turma1`
    FOREIGN KEY (`idTurma`)
    REFERENCES `sge`.`Turma` (`idTurma`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_TurmaDisciplina_Disciplina1`
    FOREIGN KEY (`idDisciplina`)
    REFERENCES `sge`.`Disciplina` (`idDisciplina`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sge`.`TurmaProfessor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sge`.`TurmaProfessor` (
  `idTurma` INT UNSIGNED NOT NULL,
  `idProfessor` INT UNSIGNED NOT NULL,
  INDEX `fk_TurmaProfessor_Turma1_idx` (`idTurma` ASC),
  INDEX `fk_TurmaProfessor_Professor1_idx` (`idProfessor` ASC),
  CONSTRAINT `fk_TurmaProfessor_Turma1`
    FOREIGN KEY (`idTurma`)
    REFERENCES `sge`.`Turma` (`idTurma`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_TurmaProfessor_Professor1`
    FOREIGN KEY (`idProfessor`)
    REFERENCES `sge`.`Professor` (`idProfessor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sge`.`AlunoResponsavel`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sge`.`AlunoResponsavel` (
  `idResponsavel` INT UNSIGNED NOT NULL,
  `idAluno` INT UNSIGNED NOT NULL,
  INDEX `fk_Aluno_has_responsavelLegal_responsavelLegal1_idx` (`idResponsavel` ASC),
  INDEX `fk_Aluno_has_responsavelLegal_Aluno1_idx` (`idAluno` ASC),
  CONSTRAINT `fk_Aluno_has_responsavelLegal_responsavelLegal1`
    FOREIGN KEY (`idResponsavel`)
    REFERENCES `sge`.`responsavel` (`idRespLegal`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Aluno_has_responsavelLegal_Aluno1`
    FOREIGN KEY (`idAluno`)
    REFERENCES `sge`.`Aluno` (`idAluno`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sge`.`historico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sge`.`historico` (
  `idHistorico` INT UNSIGNED NOT NULL,
  `nota` DECIMAL(5,2) NOT NULL,
  `falta` INT(3) NOT NULL,
  `idTurma` INT UNSIGNED NOT NULL,
  `idAluno` INT UNSIGNED NOT NULL,
  `idDisciplina` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idHistorico`),
  UNIQUE INDEX `idhistorico_UNIQUE` (`idHistorico` ASC),
  INDEX `fk_historico_Turma1_idx` (`idTurma` ASC),
  INDEX `fk_historico_Aluno1_idx` (`idAluno` ASC),
  INDEX `fk_historico_Disciplina1_idx` (`idDisciplina` ASC),
  CONSTRAINT `fk_historico_Turma1`
    FOREIGN KEY (`idTurma`)
    REFERENCES `sge`.`Turma` (`idTurma`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_historico_Aluno1`
    FOREIGN KEY (`idAluno`)
    REFERENCES `sge`.`Aluno` (`idAluno`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_historico_Disciplina1`
    FOREIGN KEY (`idDisciplina`)
    REFERENCES `sge`.`Disciplina` (`idDisciplina`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
