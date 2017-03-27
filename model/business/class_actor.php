<?php

require_once("controller/function_AutoLoad.php");

class actor {

    private $nif;
    private $nom;
    private $cognom;
    private $genere;
    private $foto;

    public function __construct($nif, $nom, $cognom, $genere, $foto) {
        $this->setNif($nif);
        $this->setNom($nom);
        $this->setCognom($cognom);
        $this->setGenere($genere);
        $this->setFoto($foto);
    }

    function getNif() {
        return $this->nif;
    }

    function getNom() {
        return $this->nom;
    }

    function getCognom() {
        return $this->cognom;
    }

    function getGenere() {
        return $this->genere;
    }

    function getFoto() {
        return $this->foto;
    }

    function setNif($nif) {
        $this->nif = $nif;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setCognom($cognom) {
        $this->cognom = $cognom;
    }

    function setGenere($genere) {
        $this->genere = $genere;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }

    public function inserirActor() {
        //$actorDb = new actordb();        
        //$actorDb->inserir($this);
        
        $v = $this->validaActor(false);

        if ($v->ok) {
            $actorDb = new actordb();
            $r = $actorDb->inserir($this);
            if ($r != 1) {
                $v->ok = false;
                $v->msg = "Fallo al inserir el actor en la base de dades.";
            }
        }

        return $v;
    }

    public function cercarPerNifActor($nif) {
        $actorDb = new actordb();
        return $actorDb->cercarPerNif($nif);
    }

    public function modificarActor($old_nif) {
        $actorDb = new actordb();
        $actorDb->modificar($old_nif, $this);
        
        $v = $this->validaActor(true);

        if ($v->ok) {
            $actorDb = new actorDb();
            $r = $actorDb->modificar($old_nif, $this);
            if ($r != 1) {
                $v->ok = false;
                $v->msg = "Fallo al modificar el actor en la base de dades.";
            }
        }

        return $v;
    }
    
    public function eliminarDirector() {

        $v = new Validar();
        $directorDb = new directorDb();
        $r = $directorDb->eliminar($this);

        if ($r != 1) {

            $v->ok = false;
            $v->msg = "Fallo al eliminar el actor en la base de dades.";
        }

        return $v;
    }

    public function validaActor($modificant) {
        $v = new Validar();
        
        $v->validarCampBuit($this->getNif());
        $v->validarCampBuit($this->getNom()); 
        $v->validarCampBuit($this->getCognom());
        $v->validarDNI($this->getNif());
        $v->stringSenseNumeros($this->getNom()); 
        $v->stringSenseNumeros($this->getCognom());
        if(!$modificant){
            $v->directorDuplicat($this->getNif());
        }
        
        return $v;
    }

}
