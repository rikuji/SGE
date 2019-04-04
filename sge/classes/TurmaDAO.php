<?php require_once 'Model.php';

	class TurmaDAO extends Model{
		public function __construct(){
			parent::__construct();
			$this->class = 'Turma';
			$this->table = 'turma';
		}
		public function insereTurma(Turma $turma){
			$valores = " null,
			'{$turma->getDescricao()}'";
			$this->inserir($valores);
		}
		public function alterarTurma(Turma $turma){
			$value = " descricao = '{$turma->getDescricao()}'";
			$this->alterar($turma->getId(), $value);
		}
		public function listarTurma(){
			$sql = $this->db->prepare("SELECT * FROM {$this->table}");
			$sql->setFetchMode(PDO::FETCH_CLASS, $this->class);
			$sql->execute();
			return $sql->fetchAll();
		}
	}
?>