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
        <link href="estilos.css" rel="stylesheet" />
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

    <!-- Tab panes -->
    <div class="tab-content">
      <div id="login" class="container tab-pane active">
        <form>
          <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="text" class="form-control is-valid" id="exampleFormControlInput1">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control is-invalid" id="exampleInputPassword1" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div id="regis" class="container tab-pane fade">
        <form>
          <div class="form-group">
            <label for="InputUsername">Username</label>
            <input type="text" class="form-control is-valid" id="InputUsername" placeholder="Username">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput2">Email address</label>
            <input type="email" class="form-control is-valid" id="exampleFormControlInput2" placeholder="name@example.com">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword2">Password</label>
            <input type="password" class="form-control is-invalid" id="exampleInputPassword2" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>