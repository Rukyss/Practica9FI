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
    <div class="content">
    <!-- Nav pills -->
    <ul class="nav nav-pills" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="pill" href="#login">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="pill" href="#regis">Register</a>
      </li>
    </ul>

    <!-- login -->
    <div class="tab-content">
      <div id="login" class="container tab-pane active">
        <form action="validarCode.php" method="POST" id="loginForm">
          <div class="form-group">
            <label for="usuario">Usuario</label>
            <input type="text" name="txtUsuario" class="form-control is-valid" id="exampleFormControlInput1">
          </div>
          <div class="form-group">
            <label for="contrasena">Password</label>
            <input type="password" name="txtContrasena" class="form-control is-invalid" id="exampleInputPassword1" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>


        <!-- register -->
      <div id="regis" class="container tab-pane fade">
        <form action="registroCode.php" method="POST">
          <div class="form-group">
            <label for="nombre">Username</label>
            <input type="text" name="txtUsuario" class="form-control is-valid" id="InputUsername" placeholder="Username">
          </div>
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" name="txtEmail" class="form-control is-valid" id="exampleFormControlInput2" placeholder="name@example.com">
          </div>
          <div class="form-group">
            <label for="contrasena">Password</label>
            <input type="password" name="txtContrasena" class="form-control is-invalid" id="exampleInputPassword2" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/overhang.min.css" />
  <script type="text/javascript" src="js/overhang.min.js"></script>
  <script src="js/apps.js"></script>
  

</body>
</html>