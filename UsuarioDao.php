<?php 

include 'Conexion.php';
include 'usuario.php';

class UsuarioDao extends Conexion
{
    protected static $cnx;

    private static function getConexion(){
        self::$cnx = Conexion::conectar();
    }

    private static function desconectar(){
        self::$cnx = null;
    }

    // Método para validar el login
    public static function login($usuario){
        $query = "SELECT * FROM usuarios WHERE usuario = :usuario AND contrasena = :contrasena";

        self::getConexion();

        $usuarioValor = $usuario->getUsuario();
        $contrasenaValor = $usuario->getContrasena();

        $resultado = self::$cnx->prepare($query);
        $resultado->bindParam(":usuario", $usuarioValor);
        $resultado->bindParam(":contrasena", $contrasenaValor);

        $resultado->execute();

        if ($resultado->rowCount() > 0) {
            $filas = $resultado->fetch();
            if($filas["usuario"]==$usuario->getUsuario() 
            && $filas["contrasena"] == $usuario->getContrasena()){
                return true;
            }
        }
        
        return false;
    }

     // Método para obtener un usuario
    public static function getUsuario($usuario){
        $query = "SELECT id,usuario,email FROM usuarios WHERE usuario = :usuario AND contrasena = :contrasena";

        self::getConexion();

        $usuarioValor = $usuario->getUsuario();
        $contrasenaValor = $usuario->getContrasena();

        $resultado = self::$cnx->prepare($query);
        $resultado->bindParam(":usuario", $usuarioValor);
        $resultado->bindParam(":contrasena", $contrasenaValor);

        $resultado->execute();

        $filas = $resultado->fetch();

        $usuario = new Usuario();
        $usuario->setId($filas["id"]);
        $usuario->setUsuario($filas["usuario"]);
        $usuario->setEmail($filas["email"]);

        return $usuario;
    }

     // Método para registrar usuarios
     public static function registrar($usuario)
     {
       $query = "INSERT INTO usuarios (
        usuario,email,contrasena) VALUES
        (:usuario,:email,:contrasena)";
        
       self::getConexion();

       $resultado = self::$cnx->prepare($query);

       $resultado->bindParam(":usuario", $usuario->getUsuario());
       $resultado->bindParam(":email", $usuario->getEmail());
       $resultado->bindParam(":contrasena", $usuario->getContrasena());

       if ($resultado->execute()){
        return true;
       }
       
       return false;
    }
}
?>
