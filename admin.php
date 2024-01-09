<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Bare - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="css/estilos.css" rel="stylesheet" />
</head>
<body>
<br><br>
<div class="container">
    <h1 class="text-center" style="background-color:black; color:white;">POKEMONS</h1>
</div>
<br><br><br><br>
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Generacion</th>
      <th scope="col">Tipo</th>
      <th scope="col">juego</th>
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>
  <?php
    require("Conexion.php");

    $cn = Conexion::conectar();

    if (!$cn) {
        die("Error al conectar a la base de datos");
    }

    $sql = $cn->query("SELECT * FROM pokemons");

    // Verificar si la consulta fue exitosa
    if ($sql) {
        while ($resultado = $sql->fetch(PDO::FETCH_ASSOC)) {
    ?>
    <tr>
        <th scope="row"><?php echo $resultado['ID']; ?></th>
            <td><?php echo $resultado['nombre']; ?></td>
            <td><?php echo $resultado['generacion']; ?></td>
            <td><?php echo $resultado['tipo']; ?></td>
            <td><?php echo $resultado['juego']; ?></td>
        <th>
        <a href="editarForm.php?ID=<?php echo $resultado['ID']?>" class="btn btn-warning">Editar</a>

        <a href="eliminarDatos.php?ID=<?php echo $resultado['ID']?>" class="btn btn-danger">Eliminar</a>
        </th>
    </tr>
<?php
    }
    } else {
        die("Error al ejecutar la consulta");
    }
    ?>
    </table>
</div>
<div class="container">
    <form action="AgregarForm.php" method="get">
        <button type="submit" id="botonNoEstilo" class="btn btn-success">Añadir Pokemon</button>
    </form>
    <br>
    <form action="cerrar-sesion.php" method="get">
        <button type="submit" name="boton_logout" class="btn btn-danger">Cerrar Sesion</button>           
    </form>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
