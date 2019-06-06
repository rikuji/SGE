<?php require_once 'Model.php';
	 
	class ProfessorDAO extends Model
	{ 
		public function __construct()
		{
			parent::__construct();
			$this->class = 'Professor'; 
			$this->table = 'professor';
		}
		public function insereProfessor(Professor $professor)
		{
			$values = " null,
			'{$professor->getNomeProfessor()}', 
			'{$professor->getCpfProfessor()}', 
			'{$professor->getSexoProfessor()}', 
			'{$professor->getEmailProfessor()}', 
			'{$professor->getMatutino()}', 
			'{$professor->getVespertino()}',
			'{$professor->getNoturno()}',
			'{$professor->getRegistroProfessor()}',
			'{$professor->getSenhaProfessor()}',
			'{$professor->getIdTipoUsuario()}'";
			$this->inserir($values);
		}
		public function alteraProfessor(Professor $professor)
		{
			$value = " null,
			'{$professor->getNomeProfessor()}', 
			'{$professor->getCpfProfessor()}', 
			'{$professor->getSexoProfessor()}', 
			'{$professor->getEmailProfessor()}', 
			'{$professor->getMatutino()}', 
			'{$professor->getVespertino()}',
			'{$professor->getNoturno()}',
			'{$professor->getRegistroProfessor()}',
			'{$professor->getSenhaProfessor()}',
			'{$professor->getIdTipoUsuario()}'";
			$this->alterar($professor->getIdeProfessor(), $value);
		}
		public function listarProfessor()
		{
			$sql = $this->db->prepare("SELECT * FROM {$this->table}");
			$sql->setFetchMode(PDO::FETCH_CLASS, $this->class);
			$sql->execute();
			return $sql->fetchAll();
		}
		public function deletarProfessor($id)
		{
			$sql = $this->db->prepare("DELETE FROM {$this->table} WHERE idProfessor = {$id}");
			$sql->execute();
		}
	}
?>	