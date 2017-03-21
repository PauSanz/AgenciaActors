<?php

require_once("controller/function_AutoLoad.php");

class rol {

    private $idPaper;
    private $nom;
    private $idActor;
    private $idPelicula;

    public function __construct($idPaper, $nom, $idActor, $idPelicula) {
        $this->setIdPaper($idPaper);
        $this->setNom($nom);
        $this->setIdActor($idActor);
        $this->setIdPelicula($idPelicula);
    }

    public function getIdPaper() {
        return $this->idPaper;
    }

    public function setIdPaper($value) {
        $this->idPaper = $value;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($value) {
        $this->nom = $value;
    }

    public function getIdActor() {
        return $this->idActor;
    }

    public function setIdActor($value) {
        $this->idActor = $value;
    }

    public function getIdPelicula() {
        return $this->idPelicula;
    }

    public function setIdPelicula($value) {
        $this->idPelicula = $value;
    }

    public function inserirPaper() {
        $v = $this->validaPaper();

        if ($v->ok) {
            $paperDb = new paperDb();
            $r = $paperDb->inserir($this);
            if ($r == 1) {
                return $v;
            } else {
                $v->ok = false;
                $v->msg = "S'ha produit un error a la base de dades";
            }
        } else {
            return $v;
        }

        //CONTROLLER
        /* $res = $d->inserirDirector();
          if($res->ok){
          echo "Inserit correctament";
          }else{
          echo "Error ".$res->msg;
          }
         */
    }

    public function cercarPerIdPaper($nif) {
        $paperDb = new paperDb();
        return $paperDb->cercarPerNif($nif);
    }

    public function modificarPaper($old_id) {
        $paperDb = new paperDb();
        return $paperDb->modificar($old_id, $this);
    }

    public function eliminarPaper() {
        $paperDb = new paperDb();
        return $paperDb->eliminar($this);
    }

    public function validaPaper() {
        //$v = new Validar();
        //return $v;
    }

}

?>