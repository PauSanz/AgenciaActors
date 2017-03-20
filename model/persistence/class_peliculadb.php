<?php

include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class peliculaDb {

    public function inserirPelicula($peli) {

        $query = "insert into pelicula values('', '" . $peli->getNom() . "', '" . $peli->getDescripcio() . "', '" . $peli->getTipus() . "', '" . $peli->getDataInici() . "', '" . $peli->getDataFi() . "', '" . $peli->getValoracio() . "', '" . $peli->getFoto() . "');";
        $con = new db();
        $con->consulta($query);
        $con->close();
    }

    public function esborrarPelicula($peli) {

        /* CONSULTA DELETE */$query = "insert into pelicula values('', '" . $peli->getNom() . "', '" . $peli->getDescripcio() . "', '" . $peli->getTipus() . "', '" . $peli->getDataInici() . "', '" . $peli->getDataFi() . "', '" . $peli->getValoracio() . "', '" . $peli->getFoto() . "');";
        $con = new db();
        $con->consulta($query);
        $con->close();
    }

}
?>