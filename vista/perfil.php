
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Perfil</title>
</head>  
<body>

<?php 
  include 'navbar.php';
?>

<section class="container my-5">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../controlador/home.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Perfil</li>
    </ol>
  </nav>
</section>

<section class="container mt-5">
  <div class="p-3 shadow mb-5">
    <div class="row">
      <div class="col-6">
        <p class="text-primary"> Alias </p>
        <p> <?=$_SESSION['alias'];?> </p>
        <p class="text-primary"> Correo </p>
        <p> <?=$_SESSION['correo'];?> </p>
        <p class="text-primary"> Telefono </p>
        <p> <?=$_SESSION['telefono'];?> </p>
      </div>
      <div class="col-6">
        <form action="../controlador/perfil.php" method="post" autocomplete="off">
          <input type="hidden" name="flag" value="1">

          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Nuevo Alias</span>
            <input type="text" class="form-control" placeholder="Ingresar alias" aria-label="alias" name="aliasnuevo" aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon2">Nuevo correo</span>
            <input type="email" class="form-control" placeholder="Ingresar correo" aria-label="correo" name="correonuevo" aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">Nuevo teléfono</span>
            <input type="tel" class="form-control" placeholder="Ingresar teléfono" aria-label="telefono" name="telefononuevo" aria-describedby="basic-addon1">
          </div>

          <button class="btn btn-primary" type="submit">Guardar</button>
        </form> 
      </div>
    </div>
  </div>

    <form action="../controlador/perfil.php" method="post">
      <input type="hidden" name="flag" value="2">
      <button class="btn btn-primary" type="submit">Salir</button>
    </form> 
</section>







</body>
</html>