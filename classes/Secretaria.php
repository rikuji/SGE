<?php
class Secretaria{
	private $idSecretaria;
	private $nomeSecretaria;
	private $cpfSecretaria;
	private $senhaSecretaria;
    private $emailSecretaria;
    private $cargoSecretaria;
    private $idTipoUsuario;

    

    /**
     * @return mixed
     */
    public function getIdSecretaria()
    {
        return $this->idSecretaria;
    }

    /**
     * @param mixed $idSecretaria
     *
     * @return self
     */
    public function setIdSecretaria($idSecretaria)
    {
        $this->idSecretaria = $idSecretaria;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNomeSecretaria()
    {
        return $this->nomeSecretaria;
    }

    /**
     * @param mixed $nomeSecretaria
     *
     * @return self
     */
    public function setNomeSecretaria($nomeSecretaria)
    {
        $this->nomeSecretaria = $nomeSecretaria;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCpfSecretaria()
    {
        return $this->cpfSecretaria;
    }

    /**
     * @param mixed $cpfSecretaria
     *
     * @return self
     */
    public function setCpfSecretaria($cpfSecretaria)
    {
        $this->cpfSecretaria = $cpfSecretaria;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSenhaSecretaria()
    {
        return $this->senhaSecretaria;
    }

    /**
     * @param mixed $senhaSecretaria
     *
     * @return self
     */
    public function setSenhaSecretaria($senhaSecretaria)
    {
        $this->senhaSecretaria = $senhaSecretaria;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmailSecretaria()
    {
        return $this->emailSecretaria;
    }

    /**
     * @param mixed $emailSecretaria
     *
     * @return self
     */
    public function setEmailSecretaria($emailSecretaria)
    {
        $this->emailSecretaria = $emailSecretaria;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCargoSecretaria()
    {
        return $this->cargoSecretaria;
    }

    /**
     * @param mixed $cargoSecretaria
     *
     * @return self
     */
    public function setCargoSecretaria($cargoSecretaria)
    {
        $this->cargoSecretaria = $cargoSecretaria;

        return $this;
    }

    public function getIdTipoUsuario(){
        return $this->idTipoUsuario; 
    }

    public function setIdTipoUsuario($idTipoUsuario){
        $this->idTipoUsuario = $idTipoUsuario;
    }

    public static function formatarCnpj($cnpj_cpf)
    {
        if (strlen(preg_replace("/\D/", '', $cnpj_cpf)) === 11) {
            $response = preg_replace("/(\d{3})(\d{3})(\d{3})(\d{2})/", "\$1.\$2.\$3-\$4", $cnpj_cpf);
        } else {
            $response = preg_replace("/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/", "\$1.\$2.\$3/\$4-\$5", $cnpj_cpf);
        }

        return $response;
    }
}
?>