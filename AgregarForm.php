<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar Pokemon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="bg-black p-2 text-white text-center">Agregar Pokemon</h1>

    <div class="container">
    <form action="insertarDatos.php" method="POST">
        
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre">
        </div>
        <div class="mb-3">
            <label class="form-label">Generacion</label>
            <input type="number" class="form-control"  name="generacion">
        </div>
        <div class="mb-3">
            <label class="form-label">Tipo</label>
            <input type="text" class="form-control" name="tipo">
        </div>
        <div class="mb-3">
            <label class="form-label">Juego</label>
            <input type="text" class="form-control" name="juego">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Enviar</button>
            <a href="admin.php" class="btn btn-dark">Volver</a>
        </div>
    </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>