<?php 

include 'UsuarioControlador.php';
include 'helps.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["txtUsuario"]) && isset($_POST["txtEmail"]) && isset($_POST["txtContrasena"])) {  
        $txtUsuario = validar_campo($_POST["txtUsuario"]);
        $txtEmail = validar_campo($_POST["txtEmail"]);
        $txtContrasena = validar_campo($_POST["txtContrasena"]);
    
        // Se debería verificar si el registro es exitoso en UsuarioControlador::registrar
        if (UsuarioControlador::registrar($txtUsuario, $txtEmail, $txtContrasena)) {
            $_SESSION["usuario"] = array(
                "usuario" => $txtUsuario,
                "email" => $txtEmail,
            );
            header("Location: admin.php");
            exit(); // Asegura que el script se detenga después de la redirección
        } else {
            header("Location: login.php?error=1");
            exit();
        }
    }
}
?>