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
CREATE SCHEMA IF NOT EXISTS `sge` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `sge` ;

-- -----------------------------------------------------
-- Table `sge`.`TipoUsuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sge`.`TipoUsuario` (
  `idTipoUsuario` INT UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '',
  `perfilTipoUsuario` VARCHAR(45) NOT NULL COMMENT '',
  PRIMARY KEY (`idTipoUsuario`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sge`.`Professor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sge`.`Professor` (
  `idProfessor` INT UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '',
  `nomeProfessor` VARCHAR(60) NOT NULL COMMENT '',
  `cpfProfessor` BIGINT(13) ZEROFILL NOT NULL COMMENT '',
  `sexoProfessor` ENUM('M', 'F') NOT NULL COMMENT '',
  `emailProfessor` VARCHAR(100) NOT NULL COMMENT '',
  `matutino` ENUM('S', 'N') NULL COMMENT '',
  `vespertino` ENUM('S', 'N') NULL COMMENT '',
  `noturno` ENUM('S', 'N') NULL COMMENT '',
  `registroProfessor` VARCHAR(45) NOT NULL COMMENT '',
  `senhaProfessor` VARCHAR(35) NOT NULL COMMENT '',
  `idTipoUsuario` INT UNSIGNED NOT NULL COMMENT '',
  PRIMARY KEY (`idProfessor`)  COMMENT '',
  INDEX `fk_Professor_tipoUsuario1_idx` (`idTipoUsuario` ASC)  COMMENT '',
  CONSTRAINT `fk_Professor_tipoUsuario1`
    FOREIGN KEY (`idTipoUsuario`)
    REFERENCES `sge`.`TipoUsuario` (`idTipoUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sge`.`anoDisciplina`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sge`.`anoDisciplina` (
  `idAnoDisciplina` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `anoDisciplina1` VARCHAR(20) NULL COMMENT '',
  `anoDisciplina2` VARCHAR(20) NULL COMMENT '',
  `anoDisciplina3` VARCHAR(20) NULL COMMENT '',
  PRIMARY KEY (`idAnoDisciplina`)  COMMENT '',
  UNIQUE INDEX `idserieDisciplina_UNIQUE` (`idAnoDisciplina` ASC)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sge`.`Disciplina`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sge`.`Disciplina` (
  `idDisciplina` INT UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '',
  `descricaoDisciplina` VARCHAR(20) NOT NULL COMMENT '',
  `idAnoDisciplina` INT NOT NULL COMMENT '',
  PRIMARY KEY (`idDisciplina`)  COMMENT '',
  INDEX `fk_Disciplina_anoDisciplina1_idx` (`idAnoDisciplina` ASC)  COMMENT '',
  CONSTRAINT `fk_Disciplina_anoDisciplina1`
    FOREIGN KEY (`idAnoDisciplina`)
    REFERENCES `sge`.`anoDisciplina` (`idAnoDisciplina`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sge`.`Turma`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sge`.`Turma` (
  `idTurma` INT UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '',
  `descricaoTurma` VARCHAR(45) NOT NULL COMMENT '',
  `periodoTurma` VARCHAR(10) NOT NULL COMMENT '',
  PRIMARY KEY (`idTurma`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sge`.`EstadoCivil`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sge`.`EstadoCivil` (
  `idEstadoCivil` INT NOT NULL COMMENT '',
  `descricaoEstadoCivil` VARCHAR(20) NOT NULL COMMENT '',
  PRIMARY KEY (`idEstadoCivil`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sge`.`Responsavel`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sge`.`Responsavel` (
  `idResponsavel` INT UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '',
  `nomeResponsavel` VARCHAR(60) NOT NULL COMMENT '',
  `cpfResponsavel` BIGINT(11) ZEROFILL NOT NULL COMMENT '',
  `emailResponsavel` VARCHAR(100) NOT NULL COMMENT '',
  `celullarResponsavel` BIGINT(13) NULL COMMENT '',
  `telFixoResponsavel` INT(12) NULL COMMENT '',
  `dtNascResponsavel` DATE NOT NULL COMMENT '',
  `sexoResponsavel` ENUM('M', 'F') NOT NULL COMMENT '',
  `logradouroResponsavel` VARCHAR(100) NOT NULL COMMENT '',
  `complementoEndeEndeResponsavel` VARCHAR(20) NULL COMMENT '',
  `bairroEndeResponsavel` VARCHAR(50) NOT NULL COMMENT '',
  `cidadeEndeResponsavel` VARCHAR(50) NOT NULL COMMENT '',
  `ufEndeResponsavel` CHAR(2) NOT NULL COMMENT '',
  `cepEndeResponsavel` INT(8) NOT NULL COMMENT '',
  `numeroEndeResponsavel` INT(6) ZEROFILL NOT NULL COMMENT '',
  `legalResponsavel` ENUM('S', 'N') NULL COMMENT '',
  `financeiroResponsavel` ENUM('S', 'N') NULL COMMENT '',
  `senhaResponsavel` VARCHAR(35) NOT NULL COMMENT '',
  `idTipoUsuario` INT UNSIGNED NOT NULL COMMENT '',
  `idEstadoCivil` INT NOT NULL COMMENT '',
  PRIMARY KEY (`idResponsavel`)  COMMENT '',
  UNIQUE INDEX `cpf_UNIQUE` (`cpfResponsavel` ASC)  COMMENT '',
  INDEX `fk_responsavelLegal_tipoUsuario1_idx` (`idTipoUsuario` ASC)  COMMENT '',
  INDEX `fk_responsavel_EstadoCivil1_idx` (`idEstadoCivil` ASC)  COMMENT '',
  CONSTRAINT `fk_responsavelLegal_tipoUsuario1`
    FOREIGN KEY (`idTipoUsuario`)
    REFERENCES `sge`.`TipoUsuario` (`idTipoUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_responsavel_EstadoCivil1`
    FOREIGN KEY (`idEstadoCivil`)
    REFERENCES `sge`.`EstadoCivil` (`idEstadoCivil`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sge`.`Aluno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sge`.`Aluno` (
  `idAluno` INT UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '',
  `nomeAluno` VARCHAR(60) NOT NULL COMMENT '',
  `cpfAluno` BIGINT(11) ZEROFILL NOT NULL COMMENT '',
  `emailAluno` VARCHAR(100) NOT NULL COMMENT '',
  `celullarAluno` BIGINT(13) NULL COMMENT '',
  `telFixoAluno` INT(12) NULL COMMENT '',
  `dtNascAluno` DATE NOT NULL COMMENT '',
  `sexoAluno` ENUM('M', 'F') NOT NULL COMMENT '',
  `logradouroEndeAluno` VARCHAR(100) NOT NULL COMMENT '',
  `complementoEndeAluno` VARCHAR(20) NULL COMMENT '',
  `bairroEndeAluno` VARCHAR(50) NOT NULL COMMENT '',
  `cidadeEndeAluno` VARCHAR(50) NOT NULL COMMENT '',
  `ufEndeAluno` CHAR(2) NOT NULL COMMENT '',
  `cepEndeAluno` INT(8) NOT NULL COMMENT '',
  `numeroEndeAluno` INT(6) ZEROFILL NOT NULL COMMENT '',
  `senhaAluno` VARCHAR(35) NOT NULL COMMENT '',
  `idTipoUsuario` INT UNSIGNED NOT NULL COMMENT '',
  `idResponsavel` INT UNSIGNED NOT NULL COMMENT '',
  PRIMARY KEY (`idAluno`)  COMMENT '',
  UNIQUE INDEX `cpf_UNIQUE` (`cpfAluno` ASC)  COMMENT '',
  INDEX `fk_Aluno_tipoUsuario1_idx` (`idTipoUsuario` ASC)  COMMENT '',
  INDEX `fk_Aluno_responsavelLegal1_idx` (`idResponsavel` ASC)  COMMENT '',
  CONSTRAINT `fk_Aluno_tipoUsuario1`
    FOREIGN KEY (`idTipoUsuario`)
    REFERENCES `sge`.`TipoUsuario` (`idTipoUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Aluno_responsavelLegal1`
    FOREIGN KEY (`idResponsavel`)
    REFERENCES `sge`.`Responsavel` (`idResponsavel`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sge`.`CargoSecretaria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sge`.`CargoSecretaria` (
  `idCargoSecretaria` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `descricaoCargo` VARCHAR(30) NOT NULL COMMENT '',
  PRIMARY KEY (`idCargoSecretaria`)  COMMENT '',
  UNIQUE INDEX `idCargoSecretaria_UNIQUE` (`idCargoSecretaria` ASC)  COMMENT '')
ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS `sge`.`UserSecretaria` (
  `idSecretaria` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomeSecretaria` VARCHAR(60) NOT NULL,
  `cpfSecretaria` BIGINT(11) ZEROFILL NOT NULL,
  `senhaSecretaria` VARCHAR(35) NOT NULL,
  `emailSecretaria` VARCHAR(100) NOT NULL,
  `cargoSecretaria` VARCHAR(15) NOT NULL,
  `idTipoUsuario` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idSecretaria`),
  UNIQUE INDEX `cpf_UNIQUE` (`cpfSecretaria` ASC),
  INDEX `fk_Secretaria_tipoUsuario1_idx` (`idTipoUsuario` ASC),
  CONSTRAINT `fk_Secretaria_tipoUsuario1`
    FOREIGN KEY (`idTipoUsuario`)
    REFERENCES `sge`.`TipoUsuario` (`idTipoUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sge`.`TurmaDisciplina`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sge`.`TurmaDisciplina` (
  `idTurma` INT UNSIGNED NOT NULL COMMENT '',
  `idDisciplina` INT UNSIGNED NOT NULL COMMENT '',
  INDEX `fk_TurmaDisciplina_Turma1_idx` (`idTurma` ASC)  COMMENT '',
  INDEX `fk_TurmaDisciplina_Disciplina1_idx` (`idDisciplina` ASC)  COMMENT '',
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
  `idTurma` INT UNSIGNED NOT NULL COMMENT '',
  `idProfessor` INT UNSIGNED NOT NULL COMMENT '',
  INDEX `fk_TurmaProfessor_Turma1_idx` (`idTurma` ASC)  COMMENT '',
  INDEX `fk_TurmaProfessor_Professor1_idx` (`idProfessor` ASC)  COMMENT '',
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
  `idResponsavel` INT UNSIGNED NOT NULL COMMENT '',
  `idAluno` INT UNSIGNED NOT NULL COMMENT '',
  INDEX `fk_Aluno_has_responsavelLegal_responsavelLegal1_idx` (`idResponsavel` ASC)  COMMENT '',
  INDEX `fk_Aluno_has_responsavelLegal_Aluno1_idx` (`idAluno` ASC)  COMMENT '',
  CONSTRAINT `fk_Aluno_has_responsavelLegal_responsavelLegal1`
    FOREIGN KEY (`idResponsavel`)
    REFERENCES `sge`.`Responsavel` (`idResponsavel`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Aluno_has_responsavelLegal_Aluno1`
    FOREIGN KEY (`idAluno`)
    REFERENCES `sge`.`Aluno` (`idAluno`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sge`.`Historico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sge`.`Historico` (
  `idHistorico` INT UNSIGNED NOT NULL COMMENT '',
  `nota1Historico` DECIMAL(4,2) NULL COMMENT '',
  `nota2Historico` DECIMAL(4,2) NULL COMMENT '',
  `nota3Historico` DECIMAL(4,2) NULL COMMENT '',
  `nota4Historico` DECIMAL(4,2) NULL COMMENT '',
  `notaFinalHistorico` DECIMAL(4,2) NULL COMMENT '',
  `anoHistorico` INT(4) NULL COMMENT '',
  `faltaHistorico` INT(3) NOT NULL COMMENT '',
  `idTurma` INT UNSIGNED NOT NULL COMMENT '',
  `idAluno` INT UNSIGNED NOT NULL COMMENT '',
  `idDisciplina` INT UNSIGNED NOT NULL COMMENT '',
  PRIMARY KEY (`idHistorico`)  COMMENT '',
  UNIQUE INDEX `idhistorico_UNIQUE` (`idHistorico` ASC)  COMMENT '',
  INDEX `fk_historico_Turma1_idx` (`idTurma` ASC)  COMMENT '',
  INDEX `fk_historico_Aluno1_idx` (`idAluno` ASC)  COMMENT '',
  INDEX `fk_historico_Disciplina1_idx` (`idDisciplina` ASC)  COMMENT '',
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

INSERT INTO `sge`.`tipousuario` (`idTipoUsuario`, `perfilTipoUsuario`) VALUES ('1', 'secretaria');
INSERT INTO `sge`.`tipousuario` (`idTipoUsuario`, `perfilTipoUsuario`) VALUES ('2', 'professor');
INSERT INTO `sge`.`tipousuario` (`idTipoUsuario`, `perfilTipoUsuario`) VALUES ('3', 'aluno');
INSERT INTO `sge`.`tipousuario` (`idTipoUsuario`, `perfilTipoUsuario`) VALUES ('4', 'responsavel');
