<?php

require_once("controller/function_AutoLoad.php");

class pelicula {

    private $idPelicula;
    private $nom;
    private $descripcio;
    private $tipus;
    private $dataInici;
    private $dataFi;
    private $valoracio;
    private $foto;

    function __construct($idPelicula, $nom, $descripcio, $tipus, $dataInici, $dataFi, $valoracio, $foto) {
        $this->setIdPelicula($idPelicula);
        $this->setNom($nom);
        $this->setDescripcio($descripcio);
        $this->setTipus($tipus);
        $this->setDataInici($dataInici);
        $this->setDataFi($dataFi);
        $this->setValoracio($valoracio);
        $this->setFoto($foto);
    }

    function getIdPelicula() {
        return $this->idPelicula;
    }

    function getNom() {
        return $this->nom;
    }

    function getDescripcio() {
        return $this->descripcio;
    }

    function getTipus() {
        return $this->tipus;
    }

    function getDataInici() {
        return $this->dataInici;
    }

    function getDataFi() {
        return $this->dataFi;
    }

    function getValoracio() {
        return $this->valoracio;
    }

    function getFoto() {
        return $this->foto;
    }

    function setIdPelicula($idPelicula) {
        $this->idPelicula = $idPelicula;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setDescripcio($descripcio) {
        $this->descripcio = $descripcio;
    }

    function setTipus($tipus) {
        $this->tipus = $tipus;
    }

    function setDataInici($dataInici) {
        $this->dataInici = $dataInici;
    }

    function setDataFi($dataFi) {
        $this->dataFi = $dataFi;
    }

    function setValoracio($valoracio) {
        $this->valoracio = $valoracio;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }

    public function inserirPelicula() {
        $peliculaDb = new peliculadb();
        $peliculaDb->inserirPelicula($this);
    }
    
    public function esborrarPelicula() {
        $peliculaDb = new peliculadb();
        $peliculaDb->esborrarPelicula($this);
    }
}

?>
