<?php require_once 'Model.php'; 
	 
	class ResponsavelDAO extends Model{ 
		public function __construct(){
			parent::__construct();
			$this->class = 'Responsavel'; 
			$this->table = 'responsavel'; 	
		}
		public function insereResponsavel(Responsavel $responsavel)
		{
			$valores = "null,
			'{$nomeResponsavel->getNomeResponsavel()}', 
			'{$cpfResponsavel->getCpfResponsavel()}', 
			'{$emailResponsavel->getEmailResponsavel()}',
			'{$celullarResponsavel->getCelullarResponsavel()}',
			'{$telFixoResponsavel->getTelFixoResponsavel()}',
			'{$dtNascResponsavel->getDtNascResponsavel()}', 
			'{$sexoResponsavel->getSexoResponsavel()}', 
			'{$logradoruroEndeResponsavel->getLogradoruroEndeResponsavel()}', 
			'{$complementoEndeResponsavel->getComplementoEndeResponsavel()}',
			'{$bairroEndeResponsavel->getBairroEndeResponsavel()}',
			'{$cidadeEndeResponsavel->getCidadeEndeResponsavel()}',
			'{$ufEndeResponsavel->getUfEndeResponsavel()}',
			'{$numeroResponsavel->getNumeroResponsavel()}',
			'{$senhaResponsavel->getSenhaResponsavel()}',
			'{$cepResponsavel->getCepResponsavel()}'";
			$this->inserir($valores);
		}
/*
		public function alteraResponsavel(Responsavel $responsavel)
		{
			$value = " null,
			'{$nomeResponsavel->getNomeResponsavel()}', 
			'{$cpfResponsavel->getCpfResponsavel()}', 
			'{$emailResponsavel->getEmailResponsavel()}',
			'{$celullarResponsavel->getCelullarResponsavel()}',
			'{$telFixoResponsavel->getTelFixoResponsavel()}',
			'{$dtNascResponsavel->getDtNascResponsavel()}', 
			'{$sexoResponsavel->getSexoResponsavel()}', 
			'{$logradoruroEndeResponsavel->getLogradoruroEndeResponsavel()}', 
			'{$complementoEndeResponsavel->getComplementoEndeResponsavel()}',
			'{$bairroEndeResponsavel->getBairroEndeResponsavel()}',
			'{$cidadeEndeResponsavel->getCidadeEndeResponsavel()}',
			'{$ufEndeResponsavel->getUfEndeResponsavel()}',
			'{$numeroResponsavel->getNumeroResponsavel()}',
			'{$senhaResponsavel->getSenhaResponsavel()}'.
			'{$cepResponsavel->getCepResponsavel()}'";
			$this->alterar($responsavel->getIdeResposavel(), $value);
		}
*/
		public function listarResposavel()
		{
			$sql = $this->db->prepare("SELECT * FROM {$this->table}");
			$sql->setFetchMode(PDO::FETCH_CLASS, $this->class);
			//print_r($sql);exit;
			$sql->execute();
			return $sql->fetchAll();
		}

		public function deletarResponsavel($id)
		{
			$sql = $this->db->prepare("DELETE FROM {$this->table} WHERE idProfessor = {$id}");
			$sql->execute();
		}
	}
?>	