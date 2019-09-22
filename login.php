<!-- Si la sesion existe, redireccionar a index.php-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilo.css">
</head>

<body class="text-center">
  <form class="form-signin ">
    <img class="mb-4 logo" src="img/logo-unid.png" alt="">
    <h1 class="h3 mb-3 font-weight-normal">Ingresar</h1>

    <label for="inputEmail" class="sr-only">Correo Electronico</label>
    <input name="password" type="email" id="inputEmail" class="form-control" placeholder="Correo Electronico" required
      autofocus>

    <label for="inputPassword" class="sr-only">Contraseña</label>
    <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Recordarme
      </label>
    </div>
    <button id="btn-login" class="btn btn-lg btn-primary btn-block" type="button">Iniciar Sesión</button>
  </form>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.10.2/js/all.js" data-auto-replace-svg="nest"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="js/login.js"></script>
</body>

</html>