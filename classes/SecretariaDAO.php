<?php require_once 'Model.php';
	 
	class SecretariaDAO extends Model{ 
		public function __construct(){
			parent::__construct();
			$this->class = 'Secretaria'; 
			$this->table = 'userSecretaria';
		}
		public function insereSecretaria(Secretaria $userSecretaria){
			$valores = "null ,
			'{$nome->getNomeSecretaria()}',
			'{$cpf->getCpfSecretaria()}',
			'{$senha->getSenhaSecretaria()}',
			'{$email->getEmailSecretaria()}',
			'{$cargo->getCargoSecretaria()}'";
			print_r($this->inserir($valores));
		}
		public function alteraSecretaria(Secretaria $secretaria){
			$value = " null,
			'{$nome->getNomeSecretaria()}',
			'{$cpf->getCpfSecretaria()}',
			'{$senha->getSenhaSecretaria()}',
			'{$email->getEmailSecretaria()}',
			'{$cargo->getCargoSecretaria()}'";
			$this->alterar($secretaria->getIdSecretaria(), $value);
	}
}
?>	