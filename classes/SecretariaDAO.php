<?php require_once 'Model.php';
	 
	class SecretariaDAO extends Model{ 
		public function __construct(){
			parent::__construct();
			$this->class = 'Secretaria'; 
			$this->table = 'Secretaria';
		}
		public function insereSecretaria(Secretaria $secretaria){
			$valores = "null ,
			'{$nome->getNomeSecretaria()}',
			'{$cpf->getCpfSecretaria()}',
			'{$sexo->getSehaSecretaria()}',
			'{$email->getEmailSecretaria()}',
			'{$disciplina->getSenhaSecretaria()}'";
			$this->inserir($valores);
		}
		public function alteraProfessor(Professor $professor){
			$value = " null,
			'{$nome->getNomeSecretaria()}',
			'{$cpf->getCpfSecretaria()}',
			'{$sexo->getSehaSecretaria()}',
			'{$email->getEmailSecretaria()}',
			'{$disciplina->getSenhaSecretaria()}'";
			$this->alterar($secretaria->getIdSecretaria(), $value);
	}
}
?>	