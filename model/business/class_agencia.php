<<<<<<< HEAD
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

    public function rebreDirectors() {

        $agenciadb = new agenciadb();
        return $agenciadb->obtenirTotsDirectors();
    }

    public function rebreActors() {
        $agenciadb = new agenciadb();
        return $agenciadb->obtenirTotsActors();
    }

    public function rebrePelis() {
        $agenciadb = new agenciadb();
        return $agenciadb->obtenirTotesPelicules();
    }
    
    public function rebrePapers() {
        $agenciadb = new agenciadb();
        return $agenciadb->obtenirTotsPapers();
    }
    
    public function cercarPelicules($str) {
        $agenciadb = new agenciadb();
        return $agenciadb->cercarPelicules($str);
    }

}

?>
=======
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

    public function rebreDirectors() {

        $agenciadb = new agenciadb();
        return $agenciadb->obtenirTotsDirectors();
    }

    public function rebreActors() {
        $agenciadb = new agenciadb();
        return $agenciadb->obtenirTotsActors();
    }

    public function rebrePelis() {
        $agenciadb = new agenciadb();
        return $agenciadb->obtenirTotesPelicules();
    }
    
    public function rebrePapers() {
        $agenciadb = new agenciadb();
        return $agenciadb->obtenirTotsPapers();
    }
    
    public function cercarPelicules($str) {
        $agenciadb = new agenciadb();
        return $agenciadb->cercarPelicules($str);
    }

}

?>
>>>>>>> master
