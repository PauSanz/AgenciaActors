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
		$directorDb = new directorDb();
		$directorDb->inserir($this);		
	}
        
        public function cercarPerNifDirector($nif){		
		$directorDb = new directorDb();
		return $directorDb->cercarPerNif($nif); 		
	}
        
        public function modificarDirector($old_nif){
            //UPDATE `director` SET `Nif`='47838294K',`Nom`='Steven',`Cognom`='Spielberg',`Foto`='images/director/Spielberg.jpg' WHERE nif='46573829H'
            $directorDb = new directorDb();
            $directorDb->modificar($old_nif,$this);
            
        }
}    
 ?>