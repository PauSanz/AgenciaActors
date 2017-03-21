<?php

require_once("controller/function_AutoLoad.php");

class agencia {

    private $nomAgencia;

    public function __construct($nomAgencia) {
        $this->setNomAgencia($nomAgencia);
    }

    function getNomAgencia() {
        return $this->nomAgencia;
    }

    function setNomAgencia($nomAgencia) {
        $this->nomAgencia = $nomAgencia;
    }

    //METODO PDO DEL FETCH
}

?>
