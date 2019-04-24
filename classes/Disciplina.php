<?php 
class Disciplina {
	private $idDisciplina;
	private $descricaoDisciplina; 

    /**
     * @return mixed
     */
    public function getIdDisciplina()
    {
        return $this->idDisciplina;
    }

    /**
     * @param mixed $idDisciplina
     *
     * @return self
     */
    public function setIdDisciplina($idDisciplina)
    {
        $this->idDisciplina = $idDisciplina;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescricaoDisciplina()
    {
        return $this->descricaoDisciplina;
    }

    /**
     * @param mixed $descricaoDisciplina
     *
     * @return self
     */
    public function setDescricaoDisciplina($descricaoDisciplina)
    {
        $this->descricaoDisciplina = $descricaoDisciplina;

        return $this;
    }
}
 




 ?>
