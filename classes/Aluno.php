<?php 
	class Aluno{
		private $idAluno; 
		private $nomeAluno;
		private $cpfAluno;
		private $emailAluno;
		private $celullarAluno;
		private $telFixoAluno;
		private $dtNascAluno;
		private $sexoAluno;
		private $logradouroEndeAluno;
		private $complementoEndeAluno;
		private $bairroEndeAluno;
		private $cidadeEndeAluno;
		private $cepEndeAluno;
		private $numeroEndeAluno;
		private $senhaAluno;
        private $ufEndeAluno;
        private $idTipoUsuario;
        private $idResponsavel;

	

    /**
     * @return mixed
     */
    public function getIdAluno()
    {
        return $this->idAluno;
    }

    /**
     * @param mixed $idAluno
     *
     * @return self
     */
    public function setIdAluno($idAluno)
    {
        $this->idAluno = $idAluno;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNomeAluno()
    {
        return $this->nomeAluno;
    }

    /**
     * @param mixed $nomeAluno
     *
     * @return self
     */
    public function setNomeAluno($nomeAluno)
    {
        $this->nomeAluno = $nomeAluno;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCpfAluno()
    {
        return $this->cpfAluno;
    }

    /**
     * @param mixed $cpfAluno
     *
     * @return self
     */
    public function setCpfAluno($cpfAluno)
    {
        $this->cpfAluno = $cpfAluno;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmailAluno()
    {
        return $this->emailAluno;
    }

    /**
     * @param mixed $emailAluno
     *
     * @return self
     */
    public function setEmailAluno($emailAluno)
    {
        $this->emailAluno = $emailAluno;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCelullarAluno()
    {
        return $this->celullarAluno;
    }

    /**
     * @param mixed $celullarAluno
     *
     * @return self
     */
    public function setCelullarAluno($celullarAluno)
    {
        $this->celullarAluno = $celullarAluno;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTelFixoAluno()
    {
        return $this->telFixoAluno;
    }

    /**
     * @param mixed $telFixoAluno
     *
     * @return self
     */
    public function setTelFixoAluno($telFixoAluno)
    {
        $this->telFixoAluno = $telFixoAluno;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDtNascAluno()
    {
        return $this->dtNascAluno;
    }

    /**
     * @param mixed $dtNascAluno
     *
     * @return self
     */
    public function setDtNascAluno($dtNascAluno)
    {
        $this->dtNascAluno = $dtNascAluno;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSexoAluno()
    {
        return $this->sexoAluno;
    }

    /**
     * @param mixed $sexoAluno
     *
     * @return self
     */
    public function setSexoAluno($sexoAluno)
    {
        $this->sexoAluno = $sexoAluno;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLogradouroEndeAluno()
    {
        return $this->logradouroEndeAluno;
    }

    /**
     * @param mixed $logradouroEndeAluno
     *
     * @return self
     */
    public function setLogradouroEndeAluno($logradouroEndeAluno)
    {
        $this->logradouroEndeAluno = $logradouroEndeAluno;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getComplementoEndeAluno()
    {
        return $this->complementoEndeAluno;
    }

    /**
     * @param mixed $complementoEndeAluno
     *
     * @return self
     */
    public function setComplementoEndeAluno($complementoEndeAluno)
    {
        $this->complementoEndeAluno = $complementoEndeAluno;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBairroEndeAluno()
    {
        return $this->bairroEndeAluno;
    }

    /**
     * @param mixed $bairroEndeAluno
     *
     * @return self
     */
    public function setBairroEndeAluno($bairroEndeAluno)
    {
        $this->bairroEndeAluno = $bairroEndeAluno;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCidadeEndeAluno()
    {
        return $this->cidadeEndeAluno;
    }

    /**
     * @param mixed $cidadeEndeAluno
     *
     * @return self
     */
    public function setCidadeEndeAluno($cidadeEndeAluno)
    {
        $this->cidadeEndeAluno = $cidadeEndeAluno;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCepEndeAluno()
    {
        return $this->cepEndeAluno;
    }

    /**
     * @param mixed $cepEndeAluno
     *
     * @return self
     */
    public function setCepEndeAluno($cepEndeAluno)
    {
        $this->cepEndeAluno = $cepEndeAluno;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumeroEndeAluno()
    {
        return $this->numeroEndeAluno;
    }

    /**
     * @param mixed $numeroEndeAluno
     *
     * @return self
     */
    public function setNumeroEndeAluno($numeroEndeAluno)
    {
        $this->numeroEndeAluno = $numeroEndeAluno;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSenhaAluno()
    {
        return $this->senhaAluno;
    }

    /**
     * @param mixed $senhaAluno
     *
     * @return self
     */
    public function setSenhaAluno($senhaAluno)
    {
        $this->senhaAluno = $senhaAluno;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUfEndeAluno()
    {
        return $this->ufEndeAluno;
    }

    /**
     * @param mixed $ufEndeAluno
     *
     * @return self
     */
    public function setUfEndeAluno($ufEndeAluno)
    {
        $this->ufEndeAluno = $ufEndeAluno;

        return $this;
    }
    public function getIdTipoUsuario(){
        return $this->idTipoUsuario; 
    }

    public function setIdTipoUsuario($idTipoUsuario){
        $this->idTipoUsuario = $idTipoUsuario;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getIdResponsavel()
    {
        return $this->idResponsavel;
    }

    /**
     * @param mixed $idResponsavel
     *
     * @return self
     */
    public function setIdResponsavel($idResponsavel)
    {
        $this->idResponsavel = $idResponsavel;

        return $this;
    }
}
    ?>