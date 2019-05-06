<?php require_once 'Model.php';

	Class EstadoCivilDAO extends Model{
		public function __construct(){ 
			parent::__construct();
			$this->class = 'EstadoCivil';
			$this->table = 'estadoCivil';
		} 
		public function insereEstadoCivil(EstadoCivil $estadoCivil){
			$valores = " null,
			'{$estadoCivil->getDescricaoEstadoCivil()}'";
			//print_r($valores);exit;
			$this->inserir($valores);
		}
		public function alterarEstadoCivil(EstadoCivil $estadoCivil){
			$sql = ("UPDATE {$this->table} SET
				descricaoEstadoCivil = '{$estadoCivil->getDescricaoEstadoCivil()}'
			 WHERE (idEstadoCivil = {$estadoCivil->getIdEstadoCivil()})");
			//print_r($sql);exit;
			$stmt= $this->db->prepare($sql);
			$stmt->execute();	
		}
		public function listarEstadoCivil(){
			$sql = $this->db->prepare("SELECT * FROM {$this->table}");
			$sql->setFetchMode(PDO::FETCH_CLASS, $this->class);
			$sql->execute();
			return $sql->fetchAll();
		}
		public function deletarEstadoCivil($id){
			$sql = $this->db->prepare("DELETE FROM {$this->table} WHERE idEstadoCivil = {$id}");
			print_r($sql);exit;
			$sql->execute();
		}
	}
?>