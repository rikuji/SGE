<?php require_once 'Model.php';
	 
	class ProfessorDAO extends Model{ 
		public function __construct(){
			parent::__construct();
			$this->class = 'Professor'; 
			$this->table = 'professor';
		}
		public function insereProfessor(Professor $professor){
			$valores = " null,
			'{$nomeProfessor->getNomeProfessor()}', 
			'{$cpfProfessor->getCpfProfessor()}', 
			'{$sexoProfessor->getSexoProfessor()}', 
			'{$emailProfessor->getEmailProfessor()}', 
			'{$matutino->getMatutino()}', 
			'{$vespertino->getVespertino()}',
			'{$noturno->getNoturno()}',
			'{$registroProfessor->getRegistroProfessor()}',
			'{$senhaProfessor->getSenhaProfessor()}'";
			$this->inserir($valores);
		}
		public function alteraProfessor(Professor $professor){
			$value = " null,
			'{$nomeProfessor->getNomeProfessor()}', 
			'{$cpfProfessor->getCpfProfessor()}', 
			'{$sexoProfessor->getSexoProfessor()}', 
			'{$emailProfessor->getEmailProfessor()}', 
			'{$matutino->getMatutino()}', 
			'{$vespertino->getVespertino()}',
			'{$noturno->getNoturno()}',
			'{$registroProfessor->getRegistroProfessor()}',
			'{$senhaProfessor->getSenhaProfessor()}'";
			$this->alterar($professor->getIdeProfessor(), $value);
		}
		public function listarProfessor(){
			$sql = $this->db->prepare("SELECT * FROM {$this->table}");
			$sql->setFetchMode(PDO::FETCH_CLASS, $this->class);
			//print_r($sql);exit;
			$sql->execute();
			return $sql->fetchAll();
		}
		public function deletarProfessor($id){
			$sql = $this->db->prepare("DELETE FROM {$this->table} WHERE idProfessor = {$id}");
			$sql->execute();
		}
	}
?>	