<?php
require_once("controller/function_AutoLoad.php"); 	

class director{
    private $nif;
    private $nom;
    private $cognom;
    private $foto;
    
    public function __construct($nif, $nom, $cognom, $foto){
		$this->setNif($nif);
		$this->setNom($nom);
		$this->setCognom($cognom);
		$this->setFoto($foto);
	}
	
	public function getNif(){
		return $this->nif;
	}

	public function setNif($value){
		$this->nif = $value;
	}
	
	public function getNom(){
		return $this->nom;
	}

	public function setNom($value){
		$this->nom = $value;
	}
	
	public function getCognom(){
		return $this->cognom;
	}

	public function setCognom($value){
		$this->cognom = $value;
	}
	
	public function getFoto(){
		return $this->foto;
	}

	public function setFoto($value){
		$this->foto = $value;
	}
	
	public function inserirDirector(){
            $v = $this->validaDirector();
            
            if($v->ok){
                $directorDb = new directorDb();
		$r = $directorDb->inserir($this);
                if($r==1){
                   return $v;
                }else{
                    $v->ok = false;
                    $v->msg = "Fallo en la base de dades";
                }
                
            }else{
                return  $v;
            }
            
            //CONTROLLER
             /*$res = $d->inserirDirector();
             if($res->ok){
                 echo "Inserit correctament";
             }else{
                 echo "Error ".$res->msg;
             }
             */
	}
        
        public function cercarPerNifDirector($nif){		
		$directorDb = new directorDb();
		return $directorDb->cercarPerNif($nif); 		
	}
        
        public function modificarDirector($old_nif){
            //UPDATE `director` SET `Nif`='47838294K',`Nom`='Steven',`Cognom`='Spielberg',`Foto`='images/director/Spielberg.jpg' WHERE nif='46573829H'
            $directorDb = new directorDb();
            return $directorDb->modificar($old_nif,$this);            
        }
        
        public function eliminarDirector(){		
		$directorDb = new directorDb();
		return $directorDb->eliminar($this);		
	}
        
        public function validaDirector(){
            //$v = new Validar();
                        
            //return $v;
        }
}    
 ?>