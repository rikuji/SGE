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

		public function alterarResponsavel(Responsavel $responsavel){
			$sql = ("UPDATE {$this->table} SET 
			nomeResponsavel = '{$responsavel->getNomeResponsavel()}', 
			cpfResponsavel  = '{$responsavel->getCpfResponsavel()}', 
			emailResponsavel = '{$responsavel->getEmailResponsavel()}',
			celullarResponsavel = '{$responsavel->getCelullarResponsavel()}',
			telFixoResponsavel = '{$responsavel->getTelFixoResponsavel()}',
			dtNascResponsavel = '{$responsavel->getDtNascResponsavel()}', 
			sexoResponsavel = '{$responsavel->getSexoResponsavel()}', 
			logradouroEndeResponsavel = '{$responsavel->getLogradouroEndeResponsavel()}', 
			complementoEndeResponsavel = '{$responsavel->getComplementoEndeResponsavel()}',
			bairroEndeResponsavel = '{$responsavel->getBairroEndeResponsavel()}',
			cidadeEndeResponsavel = '{$responsavel->getCidadeEndeResponsavel()}',
			ufEndeResponsavel = '{$responsavel->getUfEndeResponsavel()}',
			numeroEndeResponsavel = '{$responsavel->getNumeroEndeResponsavel()}',
			senhaResponsavel = '{$responsavel->getSenhaResponsavel()}',
			cepEndeResponsavel = '{$responsavel->getCepEndeResponsavel()}'
			WHERE (idResponsavel = {$responsavel->getIdResponsavel()})");
				$stmt= $this->db->prepare($sql);
				$stmt->execute();
		}
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
			$sql = $this->db->prepare("SELECT * FROM {$this->table} where idResponsavel = {$id}");
			$sql->setFetchMode(PDO::FETCH_CLASS, $this->class);
			$sql->execute();
			$results = $sql->fetchAll(PDO::FETCH_ASSOC);
			return $results; 
		} 
	}
?>	