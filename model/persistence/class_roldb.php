<?php
	/*function __autoload($class_name) {
		require_once($class_name . ".php");
	}	*/
include_once("controller/function_AutoLoad.php"); 	
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class roldb{

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
        
        public function eliminar($paper) {		
	
		$query="DELETE FROM paper WHERE idPaper='".$paper->getIdPaper()."';";				
		$con = new db();
		$paperAux = $con->consulta($query);
		$con->close();
                
                return $paperAux;
	} 
        
        public function obtenirPaper($id) {
        $query = "SELECT * FROM paper WHERE idPaper = '".$id."';";
        $con = new db();
        $arrayDePapers = $con->rebrePapers($query); //Consultar PDO
        $con->close();
        
        if (count($arrayDePapers) > 0) {
            $paperAux = $arrayDePapers[0];
            return $paperAux;
        }else{
            $paperAux = new rol('','','','');
            return $paperAux;
        }
        
    }

}    
 ?>
