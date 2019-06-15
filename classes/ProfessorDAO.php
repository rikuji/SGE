<?php 
require_once 'Model.php';
	 
class ProfessorDAO extends Model
{ 
	public function __construct()
	{
		parent::__construct();
		$this->class = 'Professor'; 
		$this->table = 'professor';
	}
	public function insereProfessor($professor)
	{
		$query = "INSERT INTO sge.professor 
		(nomeProfessor, cpfProfessor, sexoProfessor, emailProfessor, matutino, vespertino, noturno, registroProfessor, senhaProfessor,idTipoUsuario)
            VALUES (:nomeProfessor, :cpfProfessor, :sexoProfessor, :emailProfessor, :matutino, :vespertino, :noturno, :registroProfessor, :senhaProfessor, :idTipoUsuario)";

		$conexao = new PDO("mysql:host=127.0.0.1;dbname=sge","root","");
		$stmt = $conexao->prepare($query);
		$stmt->bindValue(':nomeProfessor', $professor->getNomeProfessor());
		$stmt->bindValue(':cpfProfessor', $professor->getCpfProfessor());
		$stmt->bindValue(':sexoProfessor', $professor->getSexoProfessor());
		$stmt->bindValue(':emailProfessor', $professor->getEmailProfessor());
		$stmt->bindValue(':matutino', $professor->getMatutino());
		$stmt->bindValue(':vespertino', $professor->getVespertino());
		$stmt->bindValue(':noturno', $professor->getNoturno());
		$stmt->bindValue(':registroProfessor', $professor->getRegistroProfessor());
		$stmt->bindValue(':senhaProfessor', $professor->getSenhaProfessor());
		$stmt->bindValue(':idTipoUsuario', $professor->getIdTipoUsuario());
		$stmt->execute();
	}
		/*public function insereProfessor(Professor $professor){
			$values = "null ,
			'{$this->getNomeProfessor()}',
			'{$this->getCpfProfessor()}',
			'{$this->getSexoProfessor()}',
			'{$this->getEmailProfessor()}',
			'{$this->getMatutino()}',
			'{$this->getVespertino()}',
			'{$this->getNoturno()}',
			'{$this->getRegistroProfessor()}',
			'{$this->getSenhaSecretaria()}',
			'{$this->getIdTipoUsuario()}'";
			print_r($this->inserir($values));
		}*/
		public function alteraSecretaria(Secretaria $secretaria)
		{
			$valores = "null ,
			'{$this->getNomeProfessor()}',
			'{$this->getCpfProfessor()}',
			'{$this->getSexoProfessor()}',
			'{$this->getEmailProfessor()}',
			'{$this->getMatutino()}',
			'{$this->getVespertino()}',
			'{$this->getNoturno()}',
			'{$this->getRegistroProfessor()}',
			'{$this->getSenhaSecretaria()}',
			'{$this->getIdTipoUsuario()}'";
			$this->alterar($this->getIdProfessor(), $valores);

		}
		public function listarProfessor()
		{
			$query = "SELECT * FROM professor";
			$conexao = new PDO("mysql:host=127.0.0.1;dbname=sge","root","");
			$stmt = $conexao->prepare($query);
			$stmt->execute();
			$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $results;
		}
		public function listarPorIdProfessor($id)
		{
			$query = "SELECT * FROM professor where idProfessor = :id";
			$conexao = new PDO("mysql:host=127.0.0.1;dbname=sge","root","");
			$stmt = $conexao->prepare($query);
			$stmt->bindValue(':id', $id);
			$stmt->execute();
			$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $results;
		}
		public function atualizaProfessor($professor)
		{
		    $query = "UPDATE professor SET nomeProfessor = :nomeProfessor, cpfProfessor = :cpfProfessor,
		        sexoProfessor = :sexoProfessor,
		        emailProfessor = :emailProfessor,
		        matutino = :matutino,
		        vespertino = :vespertino,
		        noturno = :noturno
		        registroProfessor = :registroProfessor,
		        senhaSecretaria = :senhaSecretaria,
		        idTipoUsuario = :idTipoUsuario
		         WHERE idProfessor = :idProfessor ";
		    $conexao = new PDO("mysql:host=127.0.0.1;dbname=sge","root","");
		    $stmt = $conexao->prepare($query);
		    $stmt->bindValue(':idProfessor', $professor->getIdProfessor());
		    $stmt->bindValue(':nomeProfessor', $professor->getNomeProfessor());
			$stmt->bindValue(':cpfProfessor', $professor->getCpfProfessor());
			$stmt->bindValue(':sexoProfessor', $professor->getSexoProfessor());
			$stmt->bindValue(':emailProfessor', $professor->getEmailProfessor());
			$stmt->bindValue(':matutino', $professor->getMatutino());
			$stmt->bindValue(':vespertino', $professor->getVespertino());
			$stmt->bindValue(':noturno', $professor->getNoturno());
			$stmt->bindValue(':registroProfessor', $professor->getRegistroProfessor());
			$stmt->bindValue(':senhaProfessor', $professor->getSenhaProfessor());
			$stmt->bindValue(':idTipoUsuario', $professor->getIdTipoUsuario());
		    $stmt->execute();
		}
		public function deletarProfessor($id){
		    $query = "DELETE FROM professor WHERE idProfessor = :idProfessor";
		    $conexao = new PDO("mysql:host=127.0.0.1;dbname=sge","root","");
		    $stmt = $conexao->prepare($query);
		    $stmt->bindValue(':idProfessor', $id);
		    $stmt->execute();
		}
}
?>	