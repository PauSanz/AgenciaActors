<?php

include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class peliculaDb {

    public function inserirPelicula($peli) {

        $query = "insert into pelicula values('', '" . $peli->getNom() . "', '" . $peli->getDescripcio() . "', '" . $peli->getTipus() . "', '" . $peli->getDataInici() . "', '" . $peli->getDataFi() . "', '" . $peli->getValoracio() . "', '" . $peli->getFoto() . "');";
        $con = new db();
        $peliculaAux = $con->consulta($query);
        $con->close();
        return $peliculaAux;
    }

    public function esborrarPelicula($peliId) {

        $query = "DELETE FROM pelicula WHERE idPelicula='" . $peliId . "';";
        $con = new db();
        $peliculaAux = $con->consulta($query);
        $con->close();
        return $peliculaAux;
    }

    public function cercarPeliPerId($id) {

        $query = "SELECT * FROM pelicula WHERE idPelicula = '" . $id . "';";
        $con = new db();
        $peliculaAux = $con->consulta($query);
        $con->close();
        return $peliculaAux;
    }

    public function modificarPelicula($old_id, $peli) {

        $query = "UPDATE `pelicula` SET `idPelicula`='" . $peli->getNif() . "',`Nom`='" . $peli->getNom() . "',`Cognom`='" . $peli->getCognom() . "',`Foto`='" . $peli->getFoto() . "' WHERE id='" . $old_id . "';";
        $con = new db();
        $peliculaAux = $con->consulta($query);
        $con->close();
        return $peliculaAux;
    }

}

?>