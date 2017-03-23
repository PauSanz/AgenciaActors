<?php
	/*function __autoload($class_name) {
		require_once($class_name . ".php");
	}	*/
include_once("controller/function_AutoLoad.php"); 	
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class rolDb{

	public function inserir($paper) {		
	
		$query="insert into paper values('".$paper->getIdPaper()."', '".$paper->getNom()."', '".$paper->getIdActor()."', '".$paper->getIdPelicula() ."');";				
		$con = new db();
		$paperAux = $con->consulta($query);
		$con->close();
                
                return $paperAux;
	} 
        
        public function cercarPerId($id) {		
	              
                $query="SELECT * FROM paper WHERE nif = '".$id."';";				
		$con = new db();
		$paperAux = $con->consulta($query);
		$con->close();
		return $paperAux;
	} 
        
        public function modificar($old_id,$paper) {		
	
		$query="UPDATE `paper` SET `idPaper`='".$paper->getIdPaper()."',`Nom`='".$paper->getNom()."',`idActor`='".$paper->getIdActor()."',`idPelicula`='".$paper->getIdPelicula()."' WHERE idPaper='".$old_id."';";				
		$con = new db();
		$paperAux = $con->consulta($query);
		$con->close();
                
                return $paperAux;
	} 
        
        public function eliminar($nif) {		
	
		$query="DELETE FROM paper WHERE idPaper='".$nif."';";				
		$con = new db();
		$paperAux = $con->consulta($query);
		$con->close();
                
                return $paperAux;
	} 

}    
 ?>
