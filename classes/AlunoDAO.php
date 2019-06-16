<?php require_once 'Model.php';
	 
	class AlunoDAO extends Model{ 
		public function __construct(){
			parent::__construct();
			$this->class = 'Aluno'; 
			$this->table = 'aluno';
		}
		public function insereAluno(Aluno $aluno)
		{ 
			$valores = " null,
			'{$aluno->getNomeAluno()}', 
			'{$aluno->getCpfAluno()}', 
			'{$aluno->getEmailAluno()}',
			'{$aluno->getCelullarAluno()}',
			'{$aluno->getTelFixoAluno()}',
			'{$aluno->getDtNascAluno()}', 
			'{$aluno->getSexoAluno()}', 
			'{$aluno->getLogradouroEndeAluno()}', 
			'{$aluno->getComplementoEndeAluno()}',
			'{$aluno->getBairroEndeAluno()}',
			'{$aluno->getCidadeEndeAluno()}',
			'{$aluno->getUfEndeAluno()}',
			'{$aluno->getCepEndeAluno()}',
			'{$aluno->getNumeroEndeAluno()}',
			'{$aluno->getSenhaAluno()}',
			'{$aluno->getIdTipoUsuario()}'";
			//print_r($valores);exit;
			$this->inserir($valores);
		}

		public function alterarAluno(Aluno $aluno)
		{
		$sql = ("UPDATE {$this->table} SET
			nomeAluno = '{$aluno->getNomeAluno()}', 
			cpfAluno = '{$aluno->getCpfAluno()}', 
			emailAluno = '{$aluno->getEmailAluno()}',
			celullarAluno = '{$aluno->getCelullarAluno()}',
			telFixoAluno = '{$aluno->getTelFixoAluno()}',
			dtNascAluno  = '{$aluno->getDtNascAluno()}', 
			sexoAluno = '{$aluno->getSexoAluno()}', 
			logradouroEndeAluno = '{$aluno->getLogradouroEndeAluno()}', 
			complementoEndeAluno = '{$aluno->getComplementoEndeAluno()}',
			bairroEndeAluno  = '{$aluno->getBairroEndeAluno()}',
			cidadeEndeAluno = '{$aluno->getCidadeEndeAluno()}',
			ufEndeAluno = '{$aluno->getUfEndeAluno()}',
			cepEndeAluno = '{$aluno->getCepEndeAluno()}',
			numeroEndeAluno = '{$aluno->getNumeroEndeAluno()}',
			senhaAluno = '{$aluno->getSenhaAluno()}',
			idTipoUsuario = '{$aluno->getIdTipoUsuario()}'
			WHERE (idAluno = {$aluno->getIdAluno()})");
			$stmt= $this->db->prepare($sql);
			//print_r($sql);exit;
			$stmt->execute();
		}

		public function listarAluno()
		{
			$sql = $this->db->prepare("SELECT * FROM {$this->table}");
			$sql->setFetchMode(PDO::FETCH_CLASS, $this->class);
			//print_r($sql);exit;
			$sql->execute();
			return $sql->fetchAll();
		}
		public function listarPorIdAluno($id){
			$sql = $this->db->prepare("SELECT * FROM {$this->table} where idAluno = {$id}");
				$sql->setFetchMode(PDO::FETCH_CLASS, $this->class);
				$sql->execute();
				$results = $sql->fetchAll(PDO::FETCH_ASSOC);
				return $results; 
			}
		public function deletarAluno($id)
		{
			$sql = $this->db->prepare("DELETE FROM {$this->table} WHERE idProfessor = {$id}");
			$sql->execute();
		}
	}
?>	