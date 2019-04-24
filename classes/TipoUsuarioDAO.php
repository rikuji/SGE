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

    
}
    