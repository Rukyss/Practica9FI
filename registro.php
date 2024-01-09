<?php
include 'Conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["txtUsuario"];
    $email = $_POST["txtEmail"];
    $contrasena = password_hash($_POST["txtContrasena"], PASSWORD_DEFAULT);

    try {
        $stmt = $conn->prepare("INSERT INTO usuarios (usuario, email, contrasena) VALUES (:usuario, :email, :contrasena)");
        $stmt->bindParam(':usuario', $usuario);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':contrasena', $contrasena);

        $stmt->execute();

        echo "Cuenta creada exitosamente";
    } catch (PDOException $e) {
        echo "Error al crear la cuenta: " . $e->getMessage();
    }
}
?>

