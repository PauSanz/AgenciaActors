<?php

require_once("interface_db.php");
class db implements interface_db {
    private $server;
    private $username;
    private $password;
    private $dbname;
    private $link;
    public function __construct() {
        $this->setServer($GLOBALS['server']);
        $this->setUsername($GLOBALS['USER']);
        $this->setPassword($GLOBALS['PASS']);
        $this->setDbname($GLOBALS['bd']);
    }
    public function getServer() {
        return $this->server;
    }
    public function setServer($value) {
        $this->server = $value;
    }
    public function getUsername() {
        return $this->username;
    }
    public function setUsername($value) {
        $this->username = $value;
    }
    public function getPassword() {
        return $this->password;
    }
    public function setPassword($value) {
        $this->password = $value;
    }
    public function getDbname() {
        return $this->dbname;
    }
    public function setDbname($value) {
        $this->dbname = $value;
    }
    public function connect() {
        $this->link = mysqli_connect($this->getServer(), $this->getUsername(), $this->getPassword(), $this->getDbname());
        if (!$this->link) {
            die('Error, could not connect: ' . $this->error());
        }
        return $this->link;
    }
    public function close() {
        return mysqli_close($this->link);
    }
    public function error() {
        return mysqli_error($this->link);
    }
    public function consulta($query) {
        $con = $this->connect();
        $resultat = mysqli_query($con, $query) or die('Error, query failed: ' . $this->error());
        return $resultat;
    }
    public function rebreDirectors($query) {
        $con = $this->connect();
        $consulta = mysqli_query($con, $query) or die('Error, query failed: ' . $this->error());
        $cont = 0;
        while ($row = mysqli_fetch_array($consulta)) {
            $director = new director($row["Nif"], $row["Nom"], $row["Cognom"], $row["Foto"]);
            $arrayDirectors[$cont] = $director;
            $cont++;
        }
        return $arrayDirectors;
    }
    public function rebreActors($query) {
        $con = $this->connect();
        $consulta = mysqli_query($con, $query) or die('Error, query failed: ' . $this->error());
        $cont = 0;
        while ($row = mysqli_fetch_array($consulta)) {
            $actor = new actor($row["Nif"], $row["Nom"], $row["Cognom"], $row["Genere"], $row["Foto"]);
            $arrayActors[$cont] = $actor;
            $cont++;
        }
        return $arrayActors;
    }
    public function rebrePelicules($query) {
        $con = $this->connect();
        $consulta = mysqli_query($con, $query) or die('Error, query failed: ' . $this->error());
        $cont = 0;
        while ($row = mysqli_fetch_array($consulta)) {
            $peli = new pelicula($row["idPelicula"], $row["nom"], $row["descripcio"], $row["tipus"], $row["dataInici"], $row["dataFi"], $row["valoracio"], $row["foto"]);
            $arrayPelicules[$cont] = $peli;
            $cont++;
        }
        return $arrayPelicules;
    }
    public function rebrePapers($query) {
        $con = $this->connect();
        $consulta = mysqli_query($con, $query) or die('Error, query failed: ' . $this->error());
        $cont = 0;
        while ($row = mysqli_fetch_array($consulta)) {
            $paper = new rol($row["idPaper"], $row["nom"], $row["idActor"], $row["idPelicula"]);
            $arrayPapers[$cont] = $paper;
            $cont++;
        }
        return $arrayPapers;
    }
}
?>