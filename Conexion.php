<?php 

class Conexion {

    //Conexion a la BBDD
    public static function conectar(){
        try{

            $cn = new PDO("mysql:host=localhost;dbname=login-php","david","1234");

            return $cn;

        }catch (PDOException $e){
            die($ex->getMessage());
        }
    }

}






?>