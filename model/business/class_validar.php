<?php

require_once("controller/function_AutoLoad.php");

class validar {

    private $ok;
    private $msg;
    

    public function __construct() {
        $this->setOk(true);
        $this->setMsg("");
    }

    public function getOk() {
        return $this->ok;
    }

    public function setOk($value) {
        $this->ok = $value;
    }

    public function getMsg() {
        return $this->msg;
    }

    public function setMsg($value) {
        $this->msg = $value;
    }



    public function directorDuplicat() {
        //$v = new Validar();
        //$v->validar
        //return $v;
    }
    
    public function actorDuplicat() {
        //$v = new Validar();
        //$v->validar
        //return $v;
    }
    
    public function validarData(){
        
    }
    
    public function validarDataIniciFinal(){
        
    }
    
    public function validarDNI(){
        
    }
    
    public function stringSenseNumeros(){
        
    }
    
    public function validarCampBuit(){
        
    }

}

?>