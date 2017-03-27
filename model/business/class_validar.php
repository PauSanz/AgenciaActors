<?php

require_once("controller/function_AutoLoad.php");

class validar {

    private $ok;
    private $msg;

    public function __construct() {
        $this->setOk(true);
        $this->setMsg("");
    }

    public function getOk() {
        return $this->ok;
    }

    public function setOk($value) {
        $this->ok = $value;
    }

    public function getMsg() {
        return $this->msg;
    }

    public function setMsg($value) {
        $this->msg = $value;
    }

    public function directorDuplicat($nif) {
        $d = new Director('','','','');
        $exist = $d->cercarPerNifDirector($nif);
        
    }

    public function actorDuplicat() {
        //$v = new Validar();
        //$v->validar
        //return $v;
    }

    public function validarData($date) {

        if ($this->ok) {
            $this->ok = checkdate($date->format("d"), $date->format("m"), $date->format("Y"));
            $this->msg = "La data introduïda no és correcte.";
        }
        //checkDate(30, 02, 2000);
    }

    public function validarDataIniciFinal($dataInici, $dataFi) {

        if ($this->ok) {
            $this->validarData($dataInici);
            $this->validarData($dataFi);

            if ($this->ok && ($dataFi < $dataInici)) {
                $this->ok = false;
                $this->msg = "La data final ha de ser major a la data d'inici.";
            }
        }
    }

    public function validarDNI($dni) {
        if ($this->ok) {
            $letra = substr($dni, -1);
            $numeros = substr($dni, 0, -1);
            if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros % 23, 1) == $letra && strlen($letra) == 1 && strlen($numeros) == 8) {
                //echo 'valido';
            } else {
                $this->ok = false;
                $this->msg = "El dni introduït no és vàlid.";
            }
        }
    }

    public function stringSenseNumeros($str) {
        if ($this->ok) {
            /* if (!str.matches("[a-zA-Z]+$")) {
              $this->ok = false;
              $this->msg = "El camp no pot contenir números o caràcters especials.";
              } */
            if (!is_numeric($str)) {
                $this->ok = false;
                $this->msg = "El camp no pot contenir números.";
            }
        }
    }

    public function validarCampBuit($str) {
        if ($this->ok) {
            if (trim($str, " ") < 1) {
                $this->ok = false;
                $this->msg = "El camp no pot estar buit.";
            }
        }
    }

}

?>