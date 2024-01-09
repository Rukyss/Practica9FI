<?php
session_start();

if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
    exit;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Pokemon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center" style="background-color:black; color:white;">EDITAR POKEMON</h1>
    </div>

    <form action="editarDatos.php" method="POST">

    <?php
        include('Conexion.php');

        $cn = Conexion::conectar();

        $id = isset($_GET['ID']) ? $_GET['ID'] : null;

        if ($id === null) {
            header("Location: admin.php");
            exit;
        }

        $sql = "SELECT * FROM pokemons WHERE ID = :id";
        $stmt = $cn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    ?>

    <div class="container">
        <input type="hidden" name="ID" value="<?php echo $row['ID']; ?>">

        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="<?php echo $row['nombre']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Generacion</label>
            <input type="text" class="form-control" name="generacion" value="<?php echo $row['generacion']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Tipo</label>
            <input type="text" class="form-control" name="tipo" value="<?php echo $row['tipo']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Juego</label>
            <input type="text" class="form-control" name="juego" value="<?php echo $row['juego']; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
