
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>

<body>

<div class="navbar navbar-inverse navbar-static-top">
<div class="container">
<a href="" class="navbar-brand">Home</a>
<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
</button>
<div class="collapse navbar-collapse navHeaderCollapse">
  <ul class="nav navbar-nav navbar-right text-center">
    <li class="active"><a href="#">prvo</a></li>
    <li calass="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Socijalno <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="">facebook</a></li>
        <li><a href="">google+</a></li>
        <li><a href="">instagram</a></li>
      </ul>
    </li>
    <li><a href="#">trece</a></li>
  </ul>
</div>
</div>
</div>

<form action="../controlador/login.php" method="post">
  <label for="usuario">Usuario:</label><br>
  <input type="text" name="usuario" autocomplete="off" value=""><br>
  <label for="contraseña">Contraseña:</label><br>
  <input type="password" name="contrasena" autocomplete="off" value=""><br><br>
  <input type="submit" value="Ingresar">
  <input type="hidden" name="flag" value="1">
</form> 


</body>
</html>