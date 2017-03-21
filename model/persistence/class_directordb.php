<?php
	/*function __autoload($class_name) {
		require_once($class_name . ".php");
	}	*/
include_once("controller/function_AutoLoad.php"); 	
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class directorDb{

	public function inserir($director) {		
	
		$query="insert into director values('".$director->getNif()."', '".$director->getNom()."', '".$director->getCognom()."', '".$director->getFoto() ."');";				
		$con = new db();
		$directorAux = $con->consulta($query);
		$con->close();
                
                return $directorAux;
	} 
        
        public function cercarPerNif($nif) {		
	              
                $query="SELECT * FROM director WHERE nif = '".$nif."';";				
		$con = new db();
		$directorAux = $con->consulta($query);
		$con->close();
		return $directorAux;
	} 
        
        public function modificar($old_nif,$director) {		
	
		$query="UPDATE `director` SET `Nif`='".$director->getNif()."',`Nom`='".$director->getNom()."',`Cognom`='".$director->getCognom()."',`Foto`='".$director->getFoto()."' WHERE nif='".$old_nif."';";				
		$con = new db();
		$directorAux = $con->consulta($query);
		$con->close();
                
                return $directorAux;
	} 
        
        public function eliminar($nif) {		
	
		$query="DELETE FROM director WHERE Nif='".$nif."';";				
		$con = new db();
		$directorAux = $con->consulta($query);
		$con->close();
                
                return $directorAux;
	} 

}    
 ?>
