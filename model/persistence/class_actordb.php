<?php

include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class actordb {

    public function inserir($actor) {       
        $query = "insert into actor values('" . $actor->getNif() . "', '" . $actor->getNom() . "', '" . $actor->getCognom() . "', '" . $actor->getGenere().  "', '/images/actor/" . $actor->getFoto() . "');";        
        $con = new db();
        $con->consulta($query);
        $con->close();
    }

    public function cercarPerNif($nif) {

        $query = "SELECT * FROM actor WHERE nif = '" . $nif . "';";
        $con = new db();
        $actorAux = $con->consulta($query);
        $con->close();
        return $actorAux;
    }

    public function modificar($old_nif, $actor) {
        $query = "UPDATE `actor` SET `nif`='" . $actor->getNif() . "',`nom`='" . $actor->getNom() . "',`cognom`='" . $actor->getCognom() . "',`foto`='" . $actor->getFoto() . "' WHERE nif='" . $old_nif . "';";
        $con = new db();
        $con->consulta($query);
        $con->close();
    }

    public function comprobardadesActor($actor) {
        
    }
    
//    public function mostrar() {
//        $query="SELECT * FROM actor;";				
//		$con = new db();
//		$arraydeActors = $con->rebreActors($query);
//		$con->close();
//		return $arraydeActors;		
//    }

}
