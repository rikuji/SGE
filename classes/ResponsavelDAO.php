<?php require_once 'Model.php'; 
	 
	class ResponsavelDAO extends Model{ 
		public function __construct(){
			parent::__construct();
			$this->class = 'Responsavel'; 
			$this->table = 'responsavel'; 	
		}
		public function insereResponsavel(Responsavel $responsavel)
		{
			$values = "null,
			'{$responsavel->getNomeResponsavel()}', 
			'{$responsavel->getCpfResponsavel()}', 
			'{$responsavel->getEmailResponsavel()}',
			'{$responsavel->getCelullarResponsavel()}',
			'{$responsavel->getTelFixoResponsavel()}',
			'{$responsavel->getDtNascResponsavel()}', 
			'{$responsavel->getSexoResponsavel()}', 
			'{$responsavel->getLogradouroEndeResponsavel()}', 
			'{$responsavel->getComplementoEndeResponsavel()}',
			'{$responsavel->getBairroEndeResponsavel()}',
			'{$responsavel->getCidadeEndeResponsavel()}',
			'{$responsavel->getUfEndeResponsavel()}',
			'{$responsavel->getCepEndeResponsavel()}',
			'{$responsavel->getNumeroEndeResponsavel()}',
			'{$responsavel->getLegalResponsavel()}',
			'{$responsavel->getFinanceiroResponsavel()}',
			'{$responsavel->getSenhaResponsavel()}',
			'{$responsavel->getIdTipoUsuario()}',
			'{$responsavel->getIdEstadoCivil()}'";
			$this->inserir($values);
		}
/*
		public function alteraResponsavel(Responsavel $responsavel)
		{
			$value = " null,
			'{$responsavel->getNomeResponsavel()}', 
			'{$responsavel->getCpfResponsavel()}', 
			'{$responsavel->getEmailResponsavel()}',
			'{$responsavel->getCelullarResponsavel()}',
			'{$responsavel->getTelFixoResponsavel()}',
			'{$responsavel->getDtNascResponsavel()}', 
			'{$responsavel->getSexoResponsavel()}', 
			'{$responsavel->getLogradoruroEndeResponsavel()}', 
			'{$responsavel->getComplementoEndeResponsavel()}',
			'{$responsavel->getBairroEndeResponsavel()}',
			'{$responsavel->getCidadeEndeResponsavel()}',
			'{$responsavel->getUfEndeResponsavel()}',
			'{$responsavel->getNumeroResponsavel()}',
			'{$responsavel->getSenhaResponsavel()}',
			'{$responsavel->getCepResponsavel()}'";
			$this->alterar($responsavel->getIdeResposavel(), $value);
		}
*/
		public function listarResposavel(){
			$sql = $this->db->prepare("SELECT * FROM {$this->table}");
			$sql->setFetchMode(PDO::FETCH_CLASS, $this->class);
			//print_r($sql);exit;
			$sql->execute();
			return $sql->fetchAll();
		}

		public function deletarResponsavel($id)
		{
			$sql = $this->db->prepare("DELETE FROM {$this->table} WHERE idResponsavel = {$id}");
			$sql->execute();
		}
		public function listarPorIdResponsavel($id)
		{
			$query = "SELECT * FROM responsavel where idResponsavel = :id";
			$conexao = new PDO("mysql:host=127.0.0.1;dbname=sge","root","");
			$stmt = $conexao->prepare($query);
			$stmt->bindValue(':id', $id);
			$stmt->execute();
			$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $results;
		}
	}
?>	