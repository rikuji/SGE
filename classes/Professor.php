<?php
class Professor{
    private $idProfessor; 
    private $nomeProfessor;
    private $cpfProfessor;
    private $sexoProfessor;
    private $emailProfessor;
    private $matutino;
    private $vespertino;
    private $noturno;
    private $registroProfessor;
    private $senhaProfessor;
    private $idTipoUsuario;

    /**
     * @return mixed
     */
    public function getIdProfessor()
    {
        return $this->idProfessor;
    }

    /**
     * @param mixed $idProfessorProfessor
     *
     * @return self
     */
    public function setIdProfessor($idProfessor)
    {
        $this->idProfessor = $idProfessor;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNomeProfessor()
    {
        return $this->nomeProfessor;
    }

    /**
     * @param mixed $nomeProfessor
     *
     * @return self
     */
    public function setNomeProfessor($nomeProfessor)
    {
        $this->nomeProfessor = $nomeProfessor;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCpfProfessor()
    {
        return $this->cpfProfessor;
    }

    /**
     * @param mixed $cpfProfessor
     *
     * @return self
     */
    public function setCpfProfessor($cpfProfessor)
    {
        $this->cpfProfessor = $cpfProfessor;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSexoProfessor()
    {
        return $this->sexoProfessor;
    }

    /**
     * @param mixed $sexoProfessor
     *
     * @return self
     */
    public function setSexoProfessor($sexoProfessor)
    {
        $this->sexoProfessor = $sexoProfessor;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmailProfessor()
    {
        return $this->emailProfessor;
    }

    /**
     * @param mixed $emailProfessor
     *
     * @return self
     */
    public function setEmailProfessor($emailProfessor)
    {
        $this->emailProfessor = $emailProfessor;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMatutino()
    {
        return $this->matutino;
    }

    /**
     * @param mixed $matutino
     *
     * @return self
     */
    public function setMatutino($matutino)
    {
        $this->matutino = $matutino;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVespertino()
    {
        return $this->vespertino;
    }

    /**
     * @param mixed $vespertino
     *
     * @return self
     */
    public function setVespertino($vespertino)
    {
        $this->vespertino = $vespertino;

        return $this;
    }
    /**
     * @return mixed
     */
    public function getNoturno()
    {
        return $this->noturno;
    }

    /**
     * @param mixed $noturo
     *
     * @return self
     */
    public function setNoturno($noturno)
    {
        $this->noturno = $noturno;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRegistroProfessor()
    {
        return $this->registroProfessor;
    }

    /**
     * @param mixed $registroProfessor
     *
     * @return self
     */
    public function setRegistroProfessor($registroProfessor)
    {
        $this->registroProfessor = $registroProfessor;

        return $this;
    }
    /**
     * @return mixed
     */
    public function getSenhaProfessor()
    {
        return $this->senhaProfessor;
    }

    /**
     * @param mixed $senhaprofessor
     *
     * @return self
     */
    public function setSenhaProfessor($senhaProfessor)
    {
        $this->senhaProfessor = $senhaProfessor;

        return $this;
    }
        /**
     * @return mixed
     */
    public function getIdTipoUsuario()
    {
        return $this->idTipoUsuario;
    }
    /**
     * @param mixed $IdTipoUsuario
     *
     * @return self
     */
    public function setIdTipoUsuario($idTipoUsuario)
    {
        $this->idTipoUsuario = $idTipoUsuario;

        return $this;
    }

}
?>