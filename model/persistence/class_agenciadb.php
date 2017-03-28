<?php

include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class agenciadb {

    public function obtenirTotsDirectors() {
        $query = "SELECT * FROM director;";
        $con = new db();
        $arrayDeDirectors = $con->rebreDirectors($query); //Consultar PDO
        $con->close();
        return $arrayDeDirectors;
    }

    public function obtenirTotsActors() {
        $query = "SELECT * FROM actor;";
        $con = new db();
        $arrayDeActors = $con->rebreActors($query); //Consultar PDO
        $con->close();
        return $arrayDeActors;
    }

    public function obtenirTotsPapers() {
        $query = "SELECT * FROM paper;";
        $con = new db();
        $arrayDePapers = $con->consulta($query); //Consultar PDO
        $con->close();
        return $arrayDePapers;
    }

    public function obtenirTotesPelicules() {
        $query = "SELECT * FROM pelicula;";
        $con = new db();
        $arrayDePelis = $con->rebrePelicules($query);
        $con->close();
        return $arrayDePelis;
    }

}
