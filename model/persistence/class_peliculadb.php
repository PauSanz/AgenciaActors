<<<<<<< HEAD
<?php

include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class peliculadb {

    public function inserirPelicula($peli) {

        $query = "insert into pelicula values('', '" . $peli->getNom() . "', '" . $peli->getDescripcio() . "', '" . $peli->getTipus() . "', '" . $peli->getDataInici() . "', '" . $peli->getDataFi() . "', '" . $peli->getValoracio() . "', 'images/pelicula/" . $peli->getFoto() . "','" . $peli->getIdDirector() . "');";
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

        $query = "UPDATE `pelicula` SET `idPelicula`='" . $peli->getIdPelicula() . "',`Nom`='" . $peli->getNom() . "',`Descripcio`='" . $peli->getDescripcio() . "',`Tipus`='" . $peli->getTipus() . "',`DataInici`='" . $peli->getDataInici() . "',`DataFi`='" . $peli->getDataFi() . "',`Valoracio`='" . $peli->getValoracio() . "',`Foto`='" . $peli->getFoto() . "',`IdDirector`='" . $peli->getIdDirector() . "' WHERE idPelicula='" . $old_id . "';";
        $con = new db();
        $peliculaAux = $con->consulta($query);
        $con->close();
        return $peliculaAux;
    }

    public function obtenirPelicula($id) {
        $query = "SELECT * FROM pelicula WHERE idPelicula = '" . $id . "';";
        $con = new db();
        $arrayDePelicules = $con->rebrePelicules($query); //Consultar PDO
        $con->close();


        if (count($arrayDePelicules) > 0) {
            $peliculaAux = $arrayDePelicules[0];
            return $peliculaAux;
        } else {
            $peliculaAux = new pelicula('', '', '', '', '', '', '', '', '');
            return $peliculaAux;
        }
    }

    public function obtenirPapersDeLaPeli($id) {
        $query = "SELECT * FROM paper WHERE idPelicula = '" . $id . "';";
        $con = new db();
        $arrayDePapers = $con->rebrePapers($query); //Consultar PDO
        $con->close();

        return $arrayDePapers;
    }

    public function obtenirPelisDirector($id) {
        $query = "SELECT * FROM pelicula WHERE idDirector = '" . $id . "';";
        $con = new db();
        $arrayDePelisDirector = $con->rebrePelicules($query); //Consultar PDO
        $con->close();

        return $arrayDePelisDirector;
    }

    public function obtenirPapersActor($id) {
        $query = "SELECT * FROM paper WHERE idActor = '" . $id . "';";
        $con = new db();
        $arrayDePelisActor = $con->rebrePapers($query); //Consultar PDO
        $con->close();

        return $arrayDePelisActor;
    }

}

=======
<?php

include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class peliculadb {

    public function inserirPelicula($peli) {

        $query = "insert into pelicula values('', '" . $peli->getNom() . "', '" . $peli->getDescripcio() . "', '" . $peli->getTipus() . "', '" . $peli->getDataInici() . "', '" . $peli->getDataFi() . "', '" . $peli->getValoracio() . "', 'images/pelicula/" . $peli->getFoto() . "','" . $peli->getIdDirector() . "');";
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

        $query = "UPDATE `pelicula` SET `idPelicula`='" . $peli->getIdPelicula() . "',`Nom`='" . $peli->getNom() . "',`Descripcio`='" . $peli->getDescripcio() . "',`Tipus`='" . $peli->getTipus() . "',`DataInici`='" . $peli->getDataInici() . "',`DataFi`='" . $peli->getDataFi() . "',`Valoracio`='" . $peli->getValoracio() . "',`Foto`='" . $peli->getFoto() . "',`IdDirector`='" . $peli->getIdDirector() . "' WHERE idPelicula='" . $old_id . "';";
        $con = new db();
        $peliculaAux = $con->consulta($query);
        $con->close();
        return $peliculaAux;
    }

    public function obtenirPelicula($id) {
        $query = "SELECT * FROM pelicula WHERE idPelicula = '" . $id . "';";
        $con = new db();
        $arrayDePelicules = $con->rebrePelicules($query); //Consultar PDO
        $con->close();


        if (count($arrayDePelicules) > 0) {
            $peliculaAux = $arrayDePelicules[0];
            return $peliculaAux;
        } else {
            $peliculaAux = new pelicula('', '', '', '', '', '', '', '', '');
            return $peliculaAux;
        }
    }

    public function obtenirPapersDeLaPeli($id) {
        $query = "SELECT * FROM paper WHERE idPelicula = '" . $id . "';";
        $con = new db();
        $arrayDePapers = $con->rebrePapers($query); //Consultar PDO
        $con->close();

        return $arrayDePapers;
    }

    public function obtenirPelisDirector($id) {
        $query = "SELECT * FROM pelicula WHERE idDirector = '" . $id . "';";
        $con = new db();
        $arrayDePelisDirector = $con->rebrePelicules($query); //Consultar PDO
        $con->close();

        return $arrayDePelisDirector;
    }

    public function obtenirPapersActor($id) {
        $query = "SELECT * FROM paper WHERE idActor = '" . $id . "';";
        $con = new db();
        $arrayDePelisActor = $con->rebrePapers($query); //Consultar PDO
        $con->close();

        return $arrayDePelisActor;
    }

}

>>>>>>> master
?>