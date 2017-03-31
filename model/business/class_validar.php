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

        if ($this->ok) {

            $d = new Director('', '', '', '');
            $exist = $d->cercarPerNifDirector($nif);
            if ($exist->num_rows > 0) {
                $this->ok = false;
                $this->msg = "Ja existeix un director a la base de dades amb aquest dni";
            }
        }
    }

    public function actorDuplicat($nif) {
        //$v = new Validar();
        //$v->validar
        //return $v;

        if ($this->ok) {

            $d = new Actor('', '', '', '', '');
            $exist = $d->cercarPerNifActor($nif);
            if ($exist->num_rows > 0) {
                $this->ok = false;
                $this->msg = "Ja existeix un actor a la base de dades amb aquest dni";
            }
        }
    }

    public function validarData($date) {

        if ($this->ok) {
            try {
                $auxDate = explode("/", $date);
                if (!checkdate($auxDate[0], $auxDate[1], $auxDate[2])) { //month,day,year
                    $this->msg = "La data introduïda no és correcte.";
                }
            } catch (Exception $exc) {
                $this->msg = "La data introduïda no és correcte.";
            }

            /* $this->ok = checkdate($date->format("d"), $date->format("m"), $date->format("Y"));
              $this->msg = "La data introduïda no és correcte."; */
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

            $valid = true;
            $split = str_split($str);

            for ($i = 0; $i < count($split); ++$i) {
                if (is_numeric($split[$i])) {
                    $valid = false;
                }
            }

            if ($valid == false) {
                $this->ok = false;
                $this->msg = "El camp no pot contenir números.";
            }
        }
    }

    public function validarCampBuit($str) {
        if ($this->ok) {

            if (strlen(trim($str, " ")) < 1) {
                $this->ok = false;
                $this->msg = "El camp no pot estar buit.";
            }
        }
    }

}

?>