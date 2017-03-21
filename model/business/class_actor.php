<?php
class actor {
    private $nif;
    private $nom;
    private $cognom;
    private $genere;
    private $foto;
    
    public function __construct($nom, $cognom,$genere,$foto){
		$this->setNif(null);
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
        
        function addActor($nif,$nom,$cognom,$genere, $foto){
         $actordb = New actorDb();  
         $actor = New actor($nif,$nom,$cognom,$genere, $foto);
         $actordb->inserirActor($actor);
        }
        
        function deleteActor($nif,$nom,$cognom,$genere,$foto){
            
        }
        
        function updateActor($nif,$nom,$cognom,$genere, $foto){
            
        }
	
} 