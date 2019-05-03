<?php 
 
	class Turma{
		private $idTurma; 
        private $descricaoTurma;
		private $periodoTurma;

    /**
     * @return mixed
     */
    public function getIdTurma()
    {
        return $this->idTurma;
    }

    /**
     * @param mixed $idTurma
     *
     * @return self
     */
    public function setIdTurma($idTurma)
    {
        $this->idTurma = $idTurma;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescricaoTurma()
    {
        return $this->descricaoTurma;
    }

    /**
     * @param mixed $descricaoTurma
     *
     * @return self
     */
    public function setDescricaoTurma($descricaoTurma)
    {
        $this->descricaoTurma = $descricaoTurma;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPeriodoTurma()
    {
        return $this->periodoTurma;
    }

    /**
     * @param mixed $periodoTurma
     *
     * @return self
     */
    public function setPeriodoTurma($periodoTurma)
    {
        $this->periodoTurma = $periodoTurma;

        return $this;
    }
}
 ?>