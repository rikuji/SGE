<?php require_once 'Model.php';
	 
	class SecretariaDAO extends Model{ 
		public function __construct(){
			parent::__construct();
			$this->class = 'Secretaria'; 
			$this->table = 'usersecretaria';
		}
		public function insereUsuarioSecretaria($secretaria){
			$query = "INSERT INTO sge.usersecretaria 
			(nomeSecretaria, cpfSecretaria, senhaSecretaria, emailSecretaria,cargoSecretaria,idTipoUsuario)
                VALUES (:nomeSecretaria, :cpfSecretaria, :senhaSecretaria, :emailSecretaria,:cargoSecretaria,:idTipoUsuario)";

			$conexao = new PDO("mysql:host=127.0.0.1;dbname=sge","root","");
			$stmt = $conexao->prepare($query);
			$stmt->bindValue(':nomeSecretaria', $secretaria->getNomeSecretaria());
			$stmt->bindValue(':cpfSecretaria', $secretaria->getCpfSecretaria());
			$stmt->bindValue(':senhaSecretaria',  $secretaria->getSenhaSecretaria());
			$stmt->bindValue(':emailSecretaria', $secretaria->getEmailSecretaria());
			$stmt->bindValue(':cargoSecretaria', $secretaria->getCargoSecretaria());
			$stmt->bindValue(':idTipoUsuario', $secretaria->getIdTipoUsuario());
			$stmt->execute();
		}
		public function insereSecretaria(Secretaria $userSecretaria){
			$valores = "null ,
			'{$this->getNomeSecretaria()}',
			'{$this->getCpfSecretaria()}',
			'{$this->getSenhaSecretaria()}',
			'{$this->getEmailSecretaria()}',
			'{$this->getCargoSecretaria()}'";
			print_r($this->inserir($valores));
		}
		public function alteraSecretaria(Secretaria $secretaria){
			$value = " null,
			'{$nome->getNomeSecretaria()}',
			'{$cpf->getCpfSecretaria()}',
			'{$senha->getSenhaSecretaria()}',
			'{$email->getEmailSecretaria()}',
			'{$cargo->getCargoSecretaria()}'";
			$this->alterar($this->getIdSecretaria(), $value);
		}
		public function listarSecretaria(){
			$query = "SELECT * FROM usersecretaria";
			$conexao = new PDO("mysql:host=127.0.0.1;dbname=sge","root","");
			$stmt = $conexao->prepare($query);
			$stmt->execute();
			$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $results;
		}
		public function listarPorIdSecretaria($id){
			$query = "SELECT * FROM usersecretaria where idSecretaria = :id";
			$conexao = new PDO("mysql:host=127.0.0.1;dbname=sge","root","");
			$stmt = $conexao->prepare($query);
			$stmt->bindValue(':id', $id);
			$stmt->execute();
			$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $results;
		}
		public function atualizaSecretaria($secretaria){
		    $query = "UPDATE usersecretaria SET nomeSecretaria = :nomeSecretaria, cpfSecretaria = :cpfSecretaria, senhaSecretaria = :senhaSecretaria,emailSecretaria = :emailSecretaria,cargoSecretaria = :cargoSecretaria,idTipoUsuario = :idTipoUsuario WHERE idSecretaria = :idSecretaria ";
		    $conexao = new PDO("mysql:host=127.0.0.1;dbname=sge","root","");
		    $stmt = $conexao->prepare($query);
		    $stmt->bindValue(':idSecretaria', $secretaria->getIdSecretaria());
		    $stmt->bindValue(':nomeSecretaria', $secretaria->getNomeSecretaria());
		    $stmt->bindValue(':cpfSecretaria',  $secretaria->getCpfSecretaria());
		    $stmt->bindValue(':senhaSecretaria',$secretaria->getSenhaSecretaria());
		    $stmt->bindValue(':emailSecretaria',$secretaria->getEmailSecretaria());
		    $stmt->bindValue(':cargoSecretaria',$secretaria->getCargoSecretaria());
		    $stmt->bindValue(':idTipoUsuario',  $secretaria->getIdTipoUsuario());;
		    $stmt->execute();
		}
		public function deletarUsuarioSecretaria($id){
		    $query = "DELETE FROM usersecretaria WHERE idSecretaria = :idSecretaria ";
		    $conexao = new PDO("mysql:host=127.0.0.1;dbname=sge","root","");
		    $stmt = $conexao->prepare($query);
		    $stmt->bindValue(':idSecretaria', $id);
		    $stmt->execute();
		}
	}
?>	