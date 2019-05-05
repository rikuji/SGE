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
			'{$nomeAluno->getNomeAluno()}', 
			'{$cpfAluno->getCpfAluno()}', 
			'{$emailAluno->getEmailAluno()}',
			'{$celullarAluno->getCelullarAluno()}',
			'{$telFixoAluno->getTelFixoAluno()}',
			'{$dtNascAluno->getDtNascAluno()}', 
			'{$sexoAluno->getSexoAluno()}', 
			'{$logradoruroEndeAluno->getLogradoruroEndeAluno()}', 
			'{$complementoEndeAluno->getComplementoEndeAluno()}',
			'{$bairroEndeAluno->getBairroEndeAluno()}',
			'{$cidadeEndeAluno->getCidadeEndeAluno()}',
			'{$ufEndeAluno->getUfEndeAluno()}',
			'{$numeroAluno->getNumeroAluno()}',
			'{$senhaAluno->getSenhaAluno()}',
			'{$cepAluno->getCepAluno()}'";
			$this->inserir($valores);
		}

		public function alteraAluno(Aluno $aluno)
		{
			$value = " null,
			'{$nomeAluno->getNomeAluno()}', 
			'{$cpfAluno->getCpfAluno()}', 
			'{$emailAluno->getEmailAluno()}',
			'{$celullarAluno->getCelullarAluno()}',
			'{$telFixoAluno->getTelFixoAluno()}',
			'{$dtNascAluno->getDtNascAluno()}', 
			'{$sexoAluno->getSexoAluno()}', 
			'{$logradoruroEndeAluno->getLogradoruroEndeAluno()}', 
			'{$complementoEndeAluno->getComplementoEndeAluno()}',
			'{$bairroEndeAluno->getBairroEndeAluno()}',
			'{$cidadeEndeAluno->getCidadeEndeAluno()}',
			'{$ufEndeAluno->getUfEndeAluno()}',
			'{$numeroAluno->getNumeroAluno()}',
			'{$senhaAluno->getSenhaAluno()}'.
			'{$cepAluno->getCepAluno()}'";
			$this->alterar($aluno->getIdeAluno(), $value);
		}

		public function listarAluno()
		{
			$sql = $this->db->prepare("SELECT * FROM {$this->table}");
			$sql->setFetchMode(PDO::FETCH_CLASS, $this->class);
			$sql->execute();
			return $sql->fetchAll();
		}

		public function deletarAluno($id)
		{
			$sql = $this->db->prepare("DELETE FROM {$this->table} WHERE idProfessor = {$id}");
			$sql->execute();
		}
	}
?>	