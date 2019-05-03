<?php require_once "Model.php";

		class DisciplinaDAO extends Model{
			public function __construct(){
			parent::__construct();
			$this->Class = 'Disciplina';
			$this->table = 'disciplina'; 
		}
		public function insereDisciplina(Disciplina $disciplina){
				$valores = "null, '{$descricaoDisciplina->getDescricaoDisciplina()}'";
				$this->inserir($valores);
		}
		public function listarDisciplina(){
			$sql = $this->db->prepare("SELECT * FROM {$this->table}");
			$sql->setFetchMode(PDO::FETCH_CLASS, $this->class);
			$sql->execute();
			return $sql->fetchAll();
		}
}

?>