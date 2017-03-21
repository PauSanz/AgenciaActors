<?php

//include_once("controller/function_AutoLoad.php"); 	
//require_once("config/config.inc.php");
//require_once("config/db.inc.php");

class actorDb {

    public function inserirActor($actor) {
        $query = "insert into actor values('', '" . $actor->getNif()
                . "', '" . $actor->getNom() . "', '" . $actor->getCognom()
                . $actor->getGenere() . "', '" . $actor->getFoto() . "');";
        $con = new db();
        $con->consulta($query);
        $con->close();
    }

    public function modificarActor($old_dni,$actor) {
            
            $sql = "UPDATE members SET nom = '$nom', cognom = '$cognom', genere = '$genere', foto = '$foto' WHERE id = {$old_dni}";
            if ($connect->query($sql) === TRUE) {
                echo "<p>Actualitzat Correctament</p>";             
            } else {
                echo "Error while updating record : " . $connect->error;
            }
            $connect->close();        
    }

    public function eliminarActor($actor) {       
           
            $sql = "DELETE * FROM actor WHERE id = {$actor->getNif()}";
            $result = $connect->query($sql);
            $data = $result->fetch_assoc();
            $connect->close();           
        
    }

    public function mostrarActor($actor) {
        
    }

    public function comprobardadesActor($actor) {
        
    }

}
