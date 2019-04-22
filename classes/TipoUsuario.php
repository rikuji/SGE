<?php 

class TipoUsuario
{
    private $idtipoUsuario;
    private $perfil;

    public function getIdtipoUsuario(){
        return $this->idtipoUsuario;
    }

    public function setIdtipoUsuario($idtipoUsuario){
        $this->idtipoUsuario = $idtipoUsuario;
    }

    public function getPerfil(){
        return $this->perfil;
    }

    public function setPerfil($perfil){
        $this->perfil = $perfil;
    }
}
