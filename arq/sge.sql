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
  `descricaoDisciplina` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`idDisciplina`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sge`.`TipoUsuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sge`.`TipoUsuario` (
  `idTipoUsuario` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `perfilTipoUsuario` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idTipoUsuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sge`.`Professor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sge`.`Professor` (
  `idProfessor` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomeProfessor` VARCHAR(60) NOT NULL,
  `cpfProfessor` BIGINT(13) NOT NULL,
  `sexoProfessor` ENUM('M', 'F') NOT NULL,
  `EmailProfessor` VARCHAR(100) NOT NULL,
  `PeriodoProfessor` VARCHAR(20) NOT NULL,
  `RegistroProfessor` INT(6) ZEROFILL NOT NULL,
  `senhaProfessor` VARCHAR(35) NOT NULL,
  `idDisciplina` INT UNSIGNED NOT NULL,
  `idTipoUsuario` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idProfessor`),
  INDEX `fk_Professor_Disciplina1_idx` (`idDisciplina` ASC),
  INDEX `fk_Professor_tipoUsuario1_idx` (`idTipoUsuario` ASC),
  UNIQUE INDEX `RegistroProfessor_UNIQUE` (`RegistroProfessor` ASC),
  CONSTRAINT `fk_Professor_Disciplina1`
    FOREIGN KEY (`idDisciplina`)
    REFERENCES `sge`.`Disciplina` (`idDisciplina`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Professor_tipoUsuario1`
    FOREIGN KEY (`idTipoUsuario`)
    REFERENCES `sge`.`TipoUsuario` (`idTipoUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sge`.`Turma`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sge`.`Turma` (
  `idTurma` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `descricaoTurma` VARCHAR(45) NOT NULL,
  `periodoTurma` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`idTurma`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sge`.`EstadoCivil`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sge`.`EstadoCivil` (
  `idEstadoCivil` INT NOT NULL AUTO_INCREMENT,
  `descricaoEstadoCivil` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`idEstadoCivil`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sge`.`Responsavel`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sge`.`Responsavel` (
  `idResponsavel` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomeResponsavel` VARCHAR(60) NOT NULL,
  `cpfResponsavel` BIGINT(11) ZEROFILL NOT NULL,
  `emailResponsavel` VARCHAR(100) NOT NULL,
  `celullarResponsavel` BIGINT(13) NULL,
  `telFixoResponsavel` INT(12) NULL,
  `dtNascResponsavel` DATE NOT NULL,
  `sexoResponsavel` ENUM('M', 'F') NOT NULL,
  `logradouroResponsavel` VARCHAR(100) NOT NULL,
  `complementoResponsavel` VARCHAR(100) NULL,
  `bairroResponsavel` VARCHAR(50) NOT NULL,
  `cidadeResponsavel` VARCHAR(50) NOT NULL,
  `ufResponsavel` CHAR(2) NOT NULL,
  `cepResponsavel` INT(8) NOT NULL,
  `numeroResponsavel` INT(6) ZEROFILL NOT NULL,
  `legalResponsavel` ENUM('S', 'N') NULL,
  `financeiro` ENUM('S', 'N') NULL,
  `senhaResponsavel` VARCHAR(35) NOT NULL,
  `idTipoUsuario` INT UNSIGNED NOT NULL,
  `idEstadoCivil` INT NOT NULL,
  PRIMARY KEY (`idResponsavel`),
  UNIQUE INDEX `cpf_UNIQUE` (`cpfResponsavel` ASC),
  INDEX `fk_responsavelLegal_tipoUsuario1_idx` (`idTipoUsuario` ASC),
  INDEX `fk_responsavel_EstadoCivil1_idx` (`idEstadoCivil` ASC),
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
  `idAluno` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomeAluno` VARCHAR(60) NOT NULL,
  `cpfAluno` BIGINT(11) ZEROFILL NOT NULL,
  `emailAluno` VARCHAR(100) NOT NULL,
  `celullarAluno` BIGINT(13) NULL,
  `telFixoAluno` INT(12) NULL,
  `dtNascAluno` DATE NOT NULL,
  `sexoAluno` ENUM('M', 'F') NOT NULL,
  `logradouroAluno` VARCHAR(100) NOT NULL,
  `complementoAluno` VARCHAR(100) NULL,
  `bairroAluno` VARCHAR(50) NOT NULL,
  `cidadeAluno` VARCHAR(50) NOT NULL,
  `ufAluno` CHAR(2) NOT NULL,
  `cepAluno` INT(8) NOT NULL,
  `numeroAluno` INT(6) ZEROFILL NOT NULL,
  `senhaAluno` VARCHAR(35) NOT NULL,
  `idTipoUsuario` INT UNSIGNED NOT NULL,
  `idResponsavel` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idAluno`),
  UNIQUE INDEX `cpf_UNIQUE` (`cpfAluno` ASC),
  INDEX `fk_Aluno_tipoUsuario1_idx` (`idTipoUsuario` ASC),
  INDEX `fk_Aluno_responsavelLegal1_idx` (`idResponsavel` ASC),
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
-- Table `sge`.`UserSecretaria`
-- -----------------------------------------------------
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
  `idTurma` INT UNSIGNED NOT NULL AUTO_INCREMENT,
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
  `idTurma` INT UNSIGNED NOT NULL AUTO_INCREMENT,
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
  `idResponsavel` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `idAluno` INT UNSIGNED NOT NULL,
  INDEX `fk_Aluno_has_responsavelLegal_responsavelLegal1_idx` (`idResponsavel` ASC),
  INDEX `fk_Aluno_has_responsavelLegal_Aluno1_idx` (`idAluno` ASC),
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
  `idHistorico` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nota1Historico` DECIMAL(4,2) NULL,
  `nota2Historico` DECIMAL(4,2) NULL,
  `nota3Historico` DECIMAL(4,2) NULL,
  `nota4Historico` DECIMAL(4,2) NULL,
  `notaFinalHistorico` DECIMAL(4,2) NULL,
  `anoHistorico` INT(4) NULL,
  `faltaHistorico` INT(3) NOT NULL,
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


-- -----------------------------------------------------
-- Table `sge`.`ProfessorDisciplina`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sge`.`ProfessorDisciplina` (
  `idProfessor` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `idDisciplina` INT UNSIGNED NOT NULL ,
  INDEX `fk_ProfessorDisciplina_Professor1_idx` (`idProfessor` ASC),
  INDEX `fk_ProfessorDisciplina_Disciplina1_idx` (`idDisciplina` ASC),
  CONSTRAINT `fk_ProfessorDisciplina_Professor1`
    FOREIGN KEY (`idProfessor`)
    REFERENCES `sge`.`Professor` (`idProfessor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ProfessorDisciplina_Disciplina1`
    FOREIGN KEY (`idDisciplina`)
    REFERENCES `sge`.`Disciplina` (`idDisciplina`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
