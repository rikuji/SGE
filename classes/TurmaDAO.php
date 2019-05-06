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
			$sql = ("UPDATE {$this->table} SET
				descricaoTurma = '{$turma->getDescricaoTurma()}',
				periodoTurma = '{$turma->getPeriodoTurma()}'
			 WHERE (idTurma = {$turma->getIdTurma()})");
			//print_r($sql);exit;
			$stmt= $this->db->prepare($sql);
			$stmt->execute();	




			//$sql->execute();
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