<<<<<<< HEAD
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
    private $idDirector;

    function __construct($idPelicula, $nom, $descripcio, $tipus, $dataInici, $dataFi, $valoracio, $foto, $idDirector) {
        $this->setIdPelicula($idPelicula);
        $this->setNom($nom);
        $this->setDescripcio($descripcio);
        $this->setTipus($tipus);
        $this->setDataInici($dataInici);
        $this->setDataFi($dataFi);
        $this->setValoracio($valoracio);
        $this->setFoto($foto);
        $this->setIdDirector($idDirector);
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

    function getIdDirector() {
        return $this->idDirector;
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

    function setIdDirector($idDirector) {
        $this->idDirector = $idDirector;
    }

    public function inserirPelicula() {
        //$peliculaDb = new peliculadb();
        //$peliculaDb->inserirPelicula($this);

        $v = $this->validaPelicula();

        if ($v->getOk()) {
            $peliculaDb = new peliculadb();
            $r = $peliculaDb->inserirPelicula($this);
            if ($r != 1) {
                $v->setOk(false);
                $v->setMsg("Fallo al inserir la pelicula en la base de dades.");
            }
        }

        return $v;
    }

    public function esborrarPelicula() {
        //$peliculaDb = new peliculadb();
        //$peliculaDb->esborrarPelicula($this);

        $v = new validar();
        $peliculaDb = new peliculadb();
        $r = $peliculaDb->esborrarPelicula($this->getIdPelicula());

        if ($r != 1) {

            $v->setOk(false);
            $v->setMsg("Fallo al eliminar la pelicula en la base de dades.");
        }

        return $v;
    }

    public function modificarPelicula($old_id) {
        $v = $this->validaPelicula();

        if ($v->getOk()) {
            $peliculaDb = new peliculadb();
            $r = $peliculaDb->modificarPelicula($old_id, $this);
            if ($r != 1) {

                $v->setOk(false);
                $v->setMsg("Fallo al modificar la pelicula en la base de dades.");
            }
        }

        return $v;
    }

    public function cercarPerIdPelicula($id) {
        $peliculaDb = new peliculadb();
        return $peliculaDb->cercarPeliPerId($id);
    }

    public function obtenirPelicula($id) {
        $peliculaDb = new peliculadb();
        return $peliculaDb->obtenirPelicula($id);
    }

    public function obtenirPapersDeLaPeli($id) {
        $peliculaDb = new peliculadb();
        return $peliculaDb->obtenirPapersDeLaPeli($id);
    }

    public function obtenirPeliculaDirector($id) {
        $peliculaDb = new peliculadb();
        return $peliculaDb->obtenirPelisDirector($id);
    }

    public function obtenirPapersActor($id) {
        $peliculaDb = new peliculadb();
        return $peliculaDb->obtenirPapersActor($id);
    }

    public function validaPelicula() {

        $v = new validar();
        $v->validarCampBuit($this->getNom());
        $v->validarCampBuit($this->getDescripcio());
        $v->validarCampBuit($this->getTipus());
        $v->validarDataIniciFinal($this->getDataInici(), $this->getDataFi());

        return $v;
    }

}

?>
=======
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
    private $idDirector;

    function __construct($idPelicula, $nom, $descripcio, $tipus, $dataInici, $dataFi, $valoracio, $foto, $idDirector) {
        $this->setIdPelicula($idPelicula);
        $this->setNom($nom);
        $this->setDescripcio($descripcio);
        $this->setTipus($tipus);
        $this->setDataInici($dataInici);
        $this->setDataFi($dataFi);
        $this->setValoracio($valoracio);
        $this->setFoto($foto);
        $this->setIdDirector($idDirector);
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

    function getIdDirector() {
        return $this->idDirector;
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

    function setIdDirector($idDirector) {
        $this->idDirector = $idDirector;
    }

    public function inserirPelicula() {
        //$peliculaDb = new peliculadb();
        //$peliculaDb->inserirPelicula($this);

        $v = $this->validaPelicula();

        if ($v->getOk()) {
            $peliculaDb = new peliculadb();
            $r = $peliculaDb->inserirPelicula($this);
            if ($r != 1) {
                $v->setOk(false);
                $v->setMsg("Fallo al inserir la pelicula en la base de dades.");
            }
        }

        return $v;
    }

    public function esborrarPelicula() {
        //$peliculaDb = new peliculadb();
        //$peliculaDb->esborrarPelicula($this);

        $v = new validar();
        $peliculaDb = new peliculadb();
        $r = $peliculaDb->esborrarPelicula($this->getIdPelicula());

        if ($r != 1) {

            $v->setOk(false);
            $v->setMsg("Fallo al eliminar la pelicula en la base de dades.");
        }

        return $v;
    }

    public function modificarPelicula($old_id) {
        $v = $this->validaPelicula();

        if ($v->getOk()) {
            $peliculaDb = new peliculadb();
            $r = $peliculaDb->modificarPelicula($old_id, $this);
            if ($r != 1) {

                $v->setOk(false);
                $v->setMsg("Fallo al modificar la pelicula en la base de dades.");
            }
        }

        return $v;
    }

    public function cercarPerIdPelicula($id) {
        $peliculaDb = new peliculadb();
        return $peliculaDb->cercarPeliPerId($id);
    }

    public function obtenirPelicula($id) {
        $peliculaDb = new peliculadb();
        return $peliculaDb->obtenirPelicula($id);
    }

    public function obtenirPapersDeLaPeli($id) {
        $peliculaDb = new peliculadb();
        return $peliculaDb->obtenirPapersDeLaPeli($id);
    }

    public function obtenirPeliculaDirector($id) {
        $peliculaDb = new peliculadb();
        return $peliculaDb->obtenirPelisDirector($id);
    }

    public function obtenirPapersActor($id) {
        $peliculaDb = new peliculadb();
        return $peliculaDb->obtenirPapersActor($id);
    }

    public function validaPelicula() {

        $v = new validar();
        $v->validarCampBuit($this->getNom());
        $v->validarCampBuit($this->getDescripcio());
        $v->validarCampBuit($this->getTipus());
        $v->validarDataIniciFinal($this->getDataInici(), $this->getDataFi());

        return $v;
    }

}

?>
>>>>>>> master
