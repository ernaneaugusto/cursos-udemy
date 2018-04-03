<?php

class Usuario {
    private $idusuario;
    private $deslogin;
    private $dessenha;

    
    // Setters
    public function setIdUsuario($idusuario) {
        $this->idusuario = $idusuario;
    }
    public function setDesLogin($deslogin) {
        $this->deslogin = $deslogin;
    }
    public function setDesSenha($dessenha) {
        $this->dessenha = $dessenha;
    }
    
    // Getters
    public function getIdUsuario() {
        return $this->idusuario;
    }
    public function getDesLogin() {
        return $this->deslogin;
    }
    public function getDesSenha() {
        return $this->dessenha;
    }
    

    



}