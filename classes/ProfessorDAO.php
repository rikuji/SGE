<?php require_once 'Model.php';
	 
	class ProfessorDAO extends Model{ 
		public function __construct(){
			parent::__construct();
			$this->class = 'Professor'; 
			$this->table = 'professor';
		}
		public function insereProfessor(Professor $professor){
			$valores = "null ,
			'{$nome->getNome()}',
			'{$cpf->getCpf()}',
			'{$sexo->getSexo()}',
			'{$email->getEmail()}',
			'{$disciplina->getDisciplina()}',
			'{$periodo->getPeriodo()}',
			'{$registro->getRegistro()}'";
			$this->inserir($valores);
		}
		public function alteraProfessor(Professor $professor){
			$value = " null,'{$nome->getNome()}', '{$cpf->getCpf()}', '{$sexo->getSexo()}', '{$email->getEmail()}', '{$disciplina->getDisciplina()}', '{$periodo->getPeriodo()}', '{$registro->getRegistro()}'";
			$this->alterar($professor->getIdeProfessor(), $value);
	}
}
?>	