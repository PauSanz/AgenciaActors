<?php
require_once("controller/function_AutoLoad.php"); 
class actor {
    private $nif;
    private $nom;
    private $cognom;
    private $genere;
    private $foto;
    
    public function __construct($nif,$nom, $cognom,$genere,$foto){
		$this->setNif($nif);
		$this->setNom($nom);
		$this->setCognom($cognom);
		$this->setGenereActor($genere);
		$this->setFoto($foto);		
	}
	
   
	function getNif() {
            return $this->nif;
        }

        function getNom() {
            return $this->nom;
        }

        function getCognom() {
            return $this->cognom;
        }

        function getGenere() {
            return $this->genere;
        }

        function getFoto() {
            return $this->foto;
        }

        function setNif($nif) {
            $this->nif = $nif;
        }

        function setNom($nom) {
            $this->nom = $nom;
        }

        function setCognom($cognom) {
            $this->cognom = $cognom;
        }

        function setGenere($genere) {
            $this->genere = $genere;
        }

        function setFoto($foto) {
            $this->foto = $foto;
        }
        
        public function inserirActor(){		
		$actorDb = new actorDb();
		$actorDb->inserir($this);		
	}
        
        public function cercarPerNifActor($nif){		
		$actorDb = new actorDb();
		return $actorDb->cercarPerNif($nif); 		
	}
        
        public function modificarActor($old_nif){
            $actorDb = new actorDb();
            $actorDb->modificar($old_nif,$this);            
        }
     
        
        
        
	
} 