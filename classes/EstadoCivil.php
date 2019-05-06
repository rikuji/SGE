<?php 
	 Class EstadoCivil{
	 	private $IdEstadoCivil;
	 	private $descricaoEstadoCivil;
	 
    /**
     * @return mixed
     */
    public function getIdEstadoCivil()
    {
        return $this->IdEstadoCivil;
    }

    /**
     * @param mixed $IdEstadoCivil
     *
     * @return self
     */
    public function setIdEstadoCivil($IdEstadoCivil)
    {
        $this->IdEstadoCivil = $IdEstadoCivil;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescricaoEstadoCivil()
    {
        return $this->descricaoEstadoCivil;
    }

    /**
     * @param mixed $descricaoEstadoCivil
     *
     * @return self
     */
    public function setDescricaoEstadoCivil($descricaoEstadoCivil)
    {
        $this->descricaoEstadoCivil = $descricaoEstadoCivil;

        return $this;
    }
}


 ?>