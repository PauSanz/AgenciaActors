<?php

require_once("controller/function_AutoLoad.php");

class director {

    private $nif;
    private $nom;
    private $cognom;
    private $foto;

    public function __construct($nif, $nom, $cognom, $foto) {
        $this->setNif($nif);
        $this->setNom($nom);
        $this->setCognom($cognom);
        $this->setFoto($foto);
    }

    public function getNif() {
        return $this->nif;
    }

    public function setNif($value) {
        $this->nif = $value;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($value) {
        $this->nom = $value;
    }

    public function getCognom() {
        return $this->cognom;
    }

    public function setCognom($value) {
        $this->cognom = $value;
    }

    public function getFoto() {
        return $this->foto;
    }

    public function setFoto($value) {
        $this->foto = $value;
    }

    public function inserirDirector() {
        $v = $this->validaDirector(false);

        if ($v->getOk()) {
            $directorDb = new directordb();
            $r = $directorDb->inserir($this);
            if ($r == false) {
                $v->setOk(false);
                $v->setMsg("Fallo al inserir el director en la base de dades.");
            }
        }

        return $v;
        //CONTROLLER
        /* $res = $d->inserirDirector();
          if($res->ok){
          echo "Inserit correctament";
          }else{
          echo "Error ".$res->msg;
          }
         */
    }

    public function cercarPerNifDirector($nif) {
        $directorDb = new directordb();
        return $directorDb->cercarPerNif($nif);
    }
    
    public function obtenirDirector($nif) {
        $directorDb = new directordb();
        return $directorDb->obtenirDirector($nif);
    }
    
    
    public function modificarDirector($old_nif) {
        //UPDATE `director` SET `Nif`='47838294K',`Nom`='Steven',`Cognom`='Spielberg',`Foto`='images/director/Spielberg.jpg' WHERE nif='46573829H'

        $v = $this->validaDirector(true);

        if ($v->getOk()) {
            $directorDb = new directordb();
            $r = $directorDb->modificar($old_nif, $this);
            if ($r != 1) {

                $v->setOk(false);
                $v->setMsg("Fallo al modificar el director en la base de dades.");
            }
        }

        return $v;
    }

    public function eliminarDirector() {

        $v = new validar();
        $directorDb = new directordb();
        $r = $directorDb->eliminar($this->getNif());

        if ($r != 1) {

            $v->setOk(false);
            $v->setMsg("Fallo al eliminar el director en la base de dades.");
        }

        return $v;
    }

    public function validaDirector($modificant) {
        $v = new validar();
        $v->validarCampBuit($this->getNif());
        $v->validarCampBuit($this->getNom());
        $v->validarCampBuit($this->getCognom());
        $v->validarDNI($this->getNif());
        $v->stringSenseNumeros($this->getNom());
        $v->stringSenseNumeros($this->getCognom());
        if (!$modificant) {
            $v->directorDuplicat($this->getNif());
        }

        return $v;
    }

}

?>