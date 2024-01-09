<?php
session_start();

if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
    exit;
} else {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nombre = $_POST['nombre'];
        $generacion = $_POST['generacion']; // Corrección de la variable
        $tipo = $_POST['tipo']; // Corrección de la variable
        $juego = $_POST['juego']; // Corrección de la variable

        require("Conexion.php");
        $cn = Conexion::conectar();

        if (!$cn) {
            die("Error al conectar a la base de datos");
        }

        // Sentencia SQL con marcadores de posición
        $sql = "INSERT INTO pokemons (nombre, generacion, tipo, juego) VALUES (:nombre, :generacion, :tipo, :juego)";

        $consulta = $cn->prepare($sql);

        // Vincular parámetros
        $consulta->bindParam(':nombre', $nombre);
        $consulta->bindParam(':generacion', $generacion);
        $consulta->bindParam(':tipo', $tipo);
        $consulta->bindParam(':juego', $juego);

        // Ejecutar la consulta
        $resultado = $consulta->execute();

        if (!$resultado) {
            die("Error al ejecutar la consulta");
        }

        header('Location: admin.php');
        exit;
    } else {
        header("Location: admin.php");
        exit;
    }
}
?>
