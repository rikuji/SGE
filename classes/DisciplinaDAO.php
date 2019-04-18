<?php require_once "Model.php";

		class DisciplinaDAO extends Model{
			public function __construct();
			parent::__construct();
			$this->Class = 'Disciplina';
			$this->table = 'disciplina'; 
		}
		public function insereDisciplina(Disciplina $disciplina){
				$valores = "null, '{$descricao->getDescricao()}'";
				$this->inserir($valores);
		}




?>