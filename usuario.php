<?php 

class Usuario {

    private $id;
    private $usuario;
    private $email;
    private $contrasena;



    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getUsuario(){
        return $this->usuario;
    }

    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getContrasena(){
        return $this->contrasena;
    }

    public function setContrasena($contrasena){
        $this->contrasena = $contrasena;
    }




}



?>