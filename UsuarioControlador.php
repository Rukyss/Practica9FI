<?php 

include 'UsuarioDao.php';

class UsuarioControlador{

    public static function login($usuario,$contrasena){
        $obj_usuario = new Usuario();
        $obj_usuario->setUsuario($usuario);
        $obj_usuario->setContrasena($contrasena);

        return UsuarioDao::login($obj_usuario);

    } 

    public static function getUsuario($usuario, $contrasena){

        $obj_usuario = new Usuario();
        $obj_usuario->setUsuario($usuario);
        $obj_usuario->setContrasena($contrasena);

        return UsuarioDao::getUsuario($obj_usuario);

    }

    public static function registrar($usuario, $email, $contrasena){

        $obj_usuario = new Usuario();
        $obj_usuario->setUsuario($usuario);
        $obj_usuario->setEmail($email);
        $obj_usuario->setContrasena($contrasena);

        return UsuarioDao::registrar($obj_usuario);

    }
}

?>