<?php require_once 'Model.php';

class TipoUsuarioDAO extends Model{

    public function __construct(){ 
        parent::__construct();
        $this->class = 'TipoUsuario';
        $this->table = 'tipousuario';
    }

    public function insereTipoUsuario(TipoUsuario $tipoUsuario){
        $valores = "null ,
        '{$tipoUsuario->getIdtipoUsuario()}',
        '{$perfil->getPerfil()}'";
        $this->inserir($valores);
    }

    public function alterarTipoUsuario(TipoUsuario $tipoUsuario){
        $value = " descricao = '{$tipoUsuario->getPerfil()}'";
        $this->alterar($tipoUsuario->getIdtipoUsuario(), $value);
    }

    public static function listarTipoUsuario(){
        $query = "SELECT * FROM tipousuario ";
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=sge","root","");
        $stmt = $conexao->prepare($query);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $results;
    }

    
}
    