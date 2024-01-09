<?php
session_start();

if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
    exit;
}else {
    

include_once('Conexion.php');

$id = isset($_POST['ID']) ? $_POST['ID'] : null;
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
$generacion = isset($_POST['generacion']) ? $_POST['generacion'] : null;
$tipo = isset($_POST['tipo']) ? $_POST['tipo'] : null;
$juego = isset($_POST['juego']) ? $_POST['juego'] : null;

// Verifica si el ID está presente antes de ejecutar la consulta
if ($id !== null) {
    $sql = "UPDATE pokemons SET 
    nombre = :nombre,
    generacion = :generacion,
    tipo = :tipo,
    juego = :juego
    WHERE ID = :ID";

    $cn = Conexion::conectar();
    $stmt = $cn->prepare($sql);

    // Enlaza los parámetros
    $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
    $stmt->bindParam(':generacion', $generacion, PDO::PARAM_STR);
    $stmt->bindParam(':tipo', $tipo, PDO::PARAM_STR);
    $stmt->bindParam(':juego', $juego, PDO::PARAM_STR);
    $stmt->bindParam(':ID', $id, PDO::PARAM_INT);

    // Ejecuta la consulta
    try {
        $stmt->execute();
        header('Location: admin.php');
    } catch (PDOException $e) {
        echo "Error en la ejecución de la consulta: " . $e->getMessage();
    }
} else {
    echo "ID no proporcionado.";
}

header("Location: admin.php");
    exit;
}
?>