<?php
$conexion = new mysqli("localhost", "root", "", "usuarios");
//Comprobar conexion
if (mysqli_connect_errno()) {
  printf("Fallo la conexion");
} else {
  //printf("Estas conectado");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link href="./assets/img/2.jpg" rel="shortcut icon" type="imagen/x-icon">
  <title>
    Usuarios
  </title>
  <meta content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0" name="viewport">
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
  <div class="mb-3">
    <div class="mb-3">
      <div class="login-form">
        <form class="sign-in-htm" action="./api/user/login.php" method="GET">
          <div class="mb-3">
            <label for="user" class="form-label">Usuario</label>
            <input id="usuario" name="usuario" type="text" class="form-control">
          </div>
          <div class="mb-3">
            <label for="pass" class="form-control">Password</label>
            <input id="password" name="password" type="text" class="form-control" data-type="password">
          </div>

          <div class="mb-3 form-check">
            <input type="submit" class="btn btn-primary" value="Ingresar">
          </div>
          <div class="hr"></div>

        </form>

      </div>
    </div>
  </div>

  
</body>

</html>