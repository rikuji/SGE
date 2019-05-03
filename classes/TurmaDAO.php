<?php require_once 'Model.php';

	class TurmaDAO extends Model{
		public function __construct(){ 
			parent::__construct();
			$this->class = 'Turma';
			$this->table = 'turma';
		} 
		public function insereTurma(Turma $turma){
			$valores = " null,
			'{$turma->getDescricaoTurma()}',
			'{$turma->getPeriodoTurma()}'";
			$this->inserir($valores);
		}
		public function alterarTurma(Turma $turma){
			$sql = $this->db->prepare("UPDATE {$this->table} SET
				descricao = '{$turma->getDescricaoTurma()}',
				periodo = '{$turma->getPeriodoTurma()}'
			 WHERE idTurma = {$idTurma}");
			$sql->execute();
						
			//$this->alterar($turma->getIdTurma(), $value);
		}
		public function listarTurma(){
			$sql = $this->db->prepare("SELECT * FROM {$this->table}");
			$sql->setFetchMode(PDO::FETCH_CLASS, $this->class);
			$sql->execute();
			return $sql->fetchAll();
		}
		public function deletarTurma($id){
			$sql = $this->db->prepare("DELETE FROM {$this->table} WHERE idTurma = {$id}");
			$sql->execute();
		}
	}
?>